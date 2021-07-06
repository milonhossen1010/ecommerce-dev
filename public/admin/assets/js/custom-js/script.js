// const { default: axios } = require("axios");



(function ($) {
    $(document).ready(function () {
        $('.logout-btn').click(function (e) {
            e.preventDefault();
            $("#logout-form").submit();
        });


        //Img Preview Function
        function imgPreviewFunction(id, load_url) {
            $(id).change(function (e) {
                let file_url = URL.createObjectURL(e.target.files[0]);

                $(load_url).attr('src', file_url);
            });

        }

        //Logo load
        imgPreviewFunction('#dark-logo', '#dark-logo-load');
        imgPreviewFunction('#light-logo', '#light-logo-load');

        //Client image show
        imgPreviewFunction('#cl1', '#cl1-load');



        $("a.delete_notice").click(function(){
            if (confirm("Are You Sure?")) {
                return true;
            } else {
                return false;
            }

            
        });


        //Delete function
        // $('.delete_notification').click(function (e) {
        //     e.preventDefault();
        //      let link = $(this).attr('href');
          
        //     //reset();
        //     alertify.confirm("This is a confirm dialog", function (e) {
        //         if (e) {
        //             alertify.success("You've clicked OK");
        //             window.location.href = link;
        //         } else {
        //             alertify.error("You've clicked Cancel");
        //             return false;
        //         }
        //     });

        // });

        //Form submit 
        $('.preventDefault').submit(function(e){
            e.preventDefault(); 
        });

        // $(".status").click(function(){
        //   alert($(this).val());
        // });







    });
})(jQuery)


// Vue js code
const root = new Vue({
    el: "#category",
    data: {
       category: {
           all: [],
           name: "",
           edit: '',
           id: '',
           check: ''
       }
    }, 

    methods: {
        //Show all categories
        showAllCategory:  function(){
             
            axios.get('/post/showallcategory').then(function(response){
                root.category.all=response.data;
            });  
        },

        //Add new category
        addCategory: function(){
            this.checkCategory();
            if(this.category.name == ''){
                toastr.error("Name field is required!");

            } else {
                let category_name = new FormData();
                category_name.append('name', this.category.name );

                axios.post("/post/category ", category_name ).then(function(response){
                root.showAllCategory();
                root.category.name = '';
                
              
                    toastr.success("Category added Successful!!");
                

                });
                
            }
            
        },

        //Exist category check
        checkCategory: function(){
            let keyword = new FormData();
            keyword.append('key', this.category.name);

            axios.post('/post/check-category', keyword).then(function(response){
                if(response.data==''){
                    root.category.check='';
                }else{
                    root.category.check=response.data;
                }
            });
        },

        //Delete Category
        deleteCategory: function(id, event){
            event.preventDefault();

            alertify.confirm("Are you sure?", function (e) {
                if (e) {
                    alertify.success("Category delete successful!!");
                    axios.get(`/post/delete-category?id=${id}` ).then(function(response){
                       
                    });
                    root.showAllCategory();
                    
                } else {
                    alertify.error("You've clicked Cancel");
                    return false;
                }
            });
        }, 

        //Edit category
        editCategory: function(id){
           
            //Category Edit data show
            axios.get(`/post/edit-category?id=${id}`).then(function(response){
                root.category.edit=response.data.name;
                root.category.id=response.data.id;
                
            });
            $("#edit_category").modal('show');
            
        },

        //Category Update
        updateCategory: function(){
            let name = new FormData();
            name.append('id', root.category.id);
            name.append('name', root.category.edit);

            axios.post("/post/update-category", name).then(function(response){
                
            });
            this.showAllCategory();
            toastr.success("Category edit Successful!!");
            $("#edit_category").modal('hide');

        },

        //Status change
        changeStatus: function(id){
            let status = new FormData();
            status.append('id',id);

            axios.post('/post/status', status).then(function(response){
                if(response.data){
                    toastr.success("Category active Successful!!");
                }else {
                    toastr.success("Category deactivate Successful!!");
                }
            });
        }

    }, 

    //Created
    created: function () {
        this.showAllCategory();
        this.checkCategory();
    }

});