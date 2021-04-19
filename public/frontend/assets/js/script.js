
function prints(){
    if (document.getElementById("tcc-includeNote").checked){
        // document.getElementById("tcc-fixedNoteText").style.display="block";
        document.getElementById("tcc-textAreaDiv").style.display="block";
    }
    else {
        document.getElementById("tcc-noteText").innerHTML="";
        document.getElementById("tcc-fixedNoteText").innerHTML="";
        window.print();
    }
}
function printChecked(){
    document.getElementById("tcc-noteText").innerHTML=document.getElementById("tcc-textArea").value;
        window.print();
}
function closeTextArea(){
    document.getElementById("tcc-textAreaDiv").style.display="none";
}
function setStartBreakTimeValues(day, setSelIndex){
let Days=["Monday", "Space", "Tuesday", "Space", "Wednesday", "Space", "Thursday", "Space", "Friday", "Space", "Saturday", "Space", "Sunday"];
if (document.getElementById("tcc-24hrFormat").checked){
        for (i=0; i < 13; i+=2){
            if(setSelIndex%2 == 0 && Days[i] == day){
        document.getElementById("tcc-startBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+(i+1).toString()).selectedIndex)/2;
        document.getElementById("tcc-startBreakMin" + (i).toString()).value="0" + 0; 
            } else if (setSelIndex%2 !==0 && Days[i] == day){
        document.getElementById("tcc-startBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+(i+1).toString()).selectedIndex)/2-0.5;
        document.getElementById("tcc-startBreakMin" + (i).toString()).value=30;
        }
    }
    } else{
for (i=0; i < 13; i+=2){
    if(setSelIndex%2 == 0 && Days[i] == day){
        if (setSelIndex > 23){
        document.getElementById("tcc-startBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+(i+1).toString()).selectedIndex)/2-12;
        document.getElementById("tcc-startBreakMin" + (i).toString()).value="0" + 0;
        }
        else {
        document.getElementById("tcc-startBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+(i+1).toString()).selectedIndex)/2;
        document.getElementById("tcc-startBreakMin" + (i).toString()).value="0" + 0;
        }
    }
    else if (setSelIndex%2 !==0 && Days[i] == day) {
        if (setSelIndex > 23){
        document.getElementById("tcc-startBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+(i+1).toString()).selectedIndex)/2-12.5;
        document.getElementById("tcc-startBreakMin" + (i).toString()).value=30;
        }
        else {
        document.getElementById("tcc-startBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+(i+1).toString()).selectedIndex)/2-0.5;
        document.getElementById("tcc-startBreakMin" + (i).toString()).value=30;
                }
            }
        }
    }
}
function setStartNormalTimeValues(day, setSelIndex){
    let Days=["Monday", "Space", "Tuesday", "Space", "Wednesday", "Space", "Thursday", "Space", "Friday", "Space", "Saturday", "Space", "Sunday"];
    if (document.getElementById("tcc-24hrFormat").checked){
        for (i=0; i < 13; i+=2){
            if(setSelIndex%2 == 0 && Days[i] == day){
        document.getElementById("tcc-startBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+(i+15).toString()).selectedIndex)/2;
        document.getElementById("tcc-startBreakMin" + (i+14).toString()).value="0" + 0;  
            } else if (setSelIndex%2 !==0 && Days[i] == day){
        document.getElementById("tcc-startBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+(i+15).toString()).selectedIndex)/2-0.5;
        document.getElementById("tcc-startBreakMin" + (i+14).toString()).value=30;
        }
    }
    } else{
for (i=0; i < 13; i+=2){
    if(setSelIndex%2 == 0 && Days[i] == day){
        if (setSelIndex > 23){
        document.getElementById("tcc-startBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+(i+15).toString()).selectedIndex)/2-12;
        document.getElementById("tcc-startBreakMin" + (i+14).toString()).value="0" + 0;
        }
        else {
        document.getElementById("tcc-startBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+(i+15).toString()).selectedIndex)/2;
        document.getElementById("tcc-startBreakMin" + (i+14).toString()).value="0" + 0;
        }
    }
    else if (setSelIndex%2 !==0 && Days[i] == day) {
        if (setSelIndex > 23){
        document.getElementById("tcc-startBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+(i+15).toString()).selectedIndex)/2-12.5;
        document.getElementById("tcc-startBreakMin" + (i+14).toString()).value=30;
        }
        else {
        document.getElementById("tcc-startBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+(i+15).toString()).selectedIndex)/2-0.5;
        document.getElementById("tcc-startBreakMin" + (i+14).toString()).value=30;
                }
            }
        }
    }
}
function setEndNormalTimeValues(day, setSelIndex){
let Days=["Monday", "Space", "Tuesday", "Space", "Wednesday", "Space", "Thursday", "Space", "Friday", "Space", "Saturday", "Space", "Sunday"];
if (document.getElementById("tcc-24hrFormat").checked){
        for (i=0; i < 13; i+=2){
            if(setSelIndex%2 == 0 && Days[i] == day){
        document.getElementById("tcc-endBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+16).toString()).selectedIndex)/2;
        document.getElementById("tcc-endBreakMin" + (i+14).toString()).value="0" + 0; 
            } else if (setSelIndex%2 !==0 && Days[i] == day){
        document.getElementById("tcc-endBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+16).toString()).selectedIndex)/2-0.5;
        document.getElementById("tcc-endBreakMin" + (i+14).toString()).value=30;
        }
    }
    } else{
for (i=0; i < 13; i+=2){    
    if(setSelIndex%2 == 0 && Days[i] == day) {
        if (setSelIndex > 23){
        document.getElementById("tcc-endBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+16).toString()).selectedIndex)/2-12;
        document.getElementById("tcc-endBreakMin" + (i+14).toString()).value="0" + 0;
        }
        else {
        document.getElementById("tcc-endBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+16).toString()).selectedIndex)/2;
        document.getElementById("tcc-endBreakMin" + (i+14).toString()).value="0" + 0;
        }
    }
    else if (setSelIndex%2 !==0 && Days[i] == day) {
        if (setSelIndex > 23){
        document.getElementById("tcc-endBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+16).toString()).selectedIndex)/2-12.5;
        document.getElementById("tcc-endBreakMin" + (i+14).toString()).value=30;
        }
        else {
        document.getElementById("tcc-endBreakHR" + (i+14).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+16).toString()).selectedIndex)/2-0.5;
        document.getElementById("tcc-endBreakMin" + (i+14).toString()).value=30;
                }
            }
        }
    }
}
function setEndBreakTimeValues(day, setSelIndex){
let Days=["Monday", "Space", "Tuesday", "Space", "Wednesday", "Space", "Thursday", "Space", "Friday", "Space", "Saturday", "Space", "Sunday"];
if (document.getElementById("tcc-24hrFormat").checked){
        for (i=0; i < 13; i+=2){
            if(setSelIndex%2 == 0 && Days[i] == day){
        document.getElementById("tcc-endBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+2).toString()).selectedIndex)/2;
        document.getElementById("tcc-endBreakMin" + (i).toString()).value="0" + 0;
            } else if (setSelIndex%2 !==0 && Days[i] == day){
        document.getElementById("tcc-endBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+2).toString()).selectedIndex)/2-0.5;
        document.getElementById("tcc-endBreakMin" + (i).toString()).value=30;
        }
    }
    } else{
for (i=0; i < 13; i+=2){
    if(setSelIndex%2 == 0 && Days[i] == day){
        if (setSelIndex > 23){
        document.getElementById("tcc-endBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+2).toString()).selectedIndex)/2-12;
        document.getElementById("tcc-endBreakMin" + (i).toString()).value="0" + 0;
        }
        else {
        document.getElementById("tcc-endBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+2).toString()).selectedIndex)/2;
        document.getElementById("tcc-endBreakMin" + (i).toString()).value="0" + 0;
        }
    }
    else if (setSelIndex%2 !==0 && Days[i] == day) {
        if (setSelIndex > 23){
        document.getElementById("tcc-endBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+2).toString()).selectedIndex)/2-12.5;
        document.getElementById("tcc-endBreakMin" + (i).toString()).value=30;
        }
        else {
        document.getElementById("tcc-endBreakHR" + (i).toString()).value=parseInt(document.getElementById("tccselectB"+ (i+2).toString()).selectedIndex)/2-0.5;
        document.getElementById("tcc-endBreakMin" + (i).toString()).value=30;
                }
            }
        }
    }
}
function setMondayBreakEnd(){
    setEndBreakTimeValues("Monday", parseInt(document.getElementById("tccselectB2").selectedIndex));
}
function setMondayTimeEnd(){
    setEndNormalTimeValues("Monday", parseInt(document.getElementById("tccselectB16").selectedIndex));
}
function setTuesdayBreakEnd(){
    setEndBreakTimeValues("Tuesday", parseInt(document.getElementById("tccselectB4").selectedIndex));
}
function setTuesdayTimeEnd(){
    setEndNormalTimeValues("Tuesday", parseInt(document.getElementById("tccselectB18").selectedIndex));
}
function setWednesdayBreakEnd(){
    setEndBreakTimeValues("Wednesday", parseInt(document.getElementById("tccselectB6").selectedIndex));
}
function setWednesdayTimeEnd(){
    setEndNormalTimeValues("Wednesday", parseInt(document.getElementById("tccselectB20").selectedIndex));
}
function setThursdayBreakEnd(){
    setEndBreakTimeValues("Thursday", parseInt(document.getElementById("tccselectB8").selectedIndex));
}
function setThursdayTimeEnd(){
    setEndNormalTimeValues("Thursday", parseInt(document.getElementById("tccselectB22").selectedIndex));
}
function setFridayBreakEnd(){
    setEndBreakTimeValues("Friday", parseInt(document.getElementById("tccselectB10").selectedIndex));
}
function setFridayTimeEnd(){
    setEndNormalTimeValues("Friday", parseInt(document.getElementById("tccselectB24").selectedIndex));
}
function setSaturdayBreakEnd(){
    setEndBreakTimeValues("Saturday", parseInt(document.getElementById("tccselectB12").selectedIndex));
}
function setSaturdayTimeEnd(){
    setEndNormalTimeValues("Saturday", parseInt(document.getElementById("tccselectB26").selectedIndex));
}
function setSundayBreakEnd(){
    setEndBreakTimeValues("Sunday", parseInt(document.getElementById("tccselectB14").selectedIndex));
}
function setSundayTimeEnd(){
    setEndNormalTimeValues("Sunday", parseInt(document.getElementById("tccselectB28").selectedIndex));
}
function setMondayBreakStart(){
    setStartBreakTimeValues("Monday", parseInt(document.getElementById("tccselectB1").selectedIndex));
}
function setMondayTimeStart(){
    setStartNormalTimeValues("Monday", parseInt(document.getElementById("tccselectB15").selectedIndex));
}
function setTuesdayBreakStart(){
    setStartBreakTimeValues("Tuesday", parseInt(document.getElementById("tccselectB3").selectedIndex));
}
function setTuesdayTimeStart(){
    setStartNormalTimeValues("Tuesday", parseInt(document.getElementById("tccselectB17").selectedIndex));
}
function setWednesdayBreakStart(){
    setStartBreakTimeValues("Wednesday", parseInt(document.getElementById("tccselectB5").selectedIndex));
}
function setWednesdayTimeStart(){
    setStartNormalTimeValues("Wednesday", parseInt(document.getElementById("tccselectB19").selectedIndex));
}
function setThursdayBreakStart(){
    setStartBreakTimeValues("Thursday", parseInt(document.getElementById("tccselectB7").selectedIndex));
}
function setThursdayTimeStart(){
    setStartNormalTimeValues("Thursday", parseInt(document.getElementById("tccselectB21").selectedIndex));
}
function setFridayBreakStart(){
    setStartBreakTimeValues("Friday", parseInt(document.getElementById("tccselectB9").selectedIndex));
}
function setFridayTimeStart(){
    setStartNormalTimeValues("Friday", parseInt(document.getElementById("tccselectB23").selectedIndex));
}
function setSaturdayBreakStart(){
    setStartBreakTimeValues("Saturday", parseInt(document.getElementById("tccselectB11").selectedIndex));
}
function setSaturdayTimeStart(){
    setStartNormalTimeValues("Saturday", parseInt(document.getElementById("tccselectB25").selectedIndex));
}
function setSundayBreakStart(){
    setStartBreakTimeValues("Sunday", parseInt(document.getElementById("tccselectB13").selectedIndex));
}
function setSundayTimeStart(){
    setStartNormalTimeValues("Sunday", parseInt(document.getElementById("tccselectB27").selectedIndex));
}
function fiveDayTable(checkbox){
    if (checkbox.checked == true) {
       $('#tcc-saturdayRow').hide();
       $('#tcc-sundayRow').hide();
    }
    else {
       $('#tcc-saturdayRow').show();
       $('#tcc-sundayRow').show();
    }
}
function removeColumn(checkbox) {
    let removableColumn= document.getElementsByClassName("tcc-removeTD");
    let addColumns=document.getElementsByClassName("tcc-breakColumns");
    let moveColumns=document.getElementsByClassName("tcc-td");
    let firstTD=document.getElementsByClassName("tcc-firsttd");
    let lastTD=document.getElementsByClassName("tcc-lasttd");
    if (checkbox.checked == true) {
       for (i=0; i < removableColumn.length; i++){
           removableColumn[i].style.display="none";
       }
       for (i=0; i < addColumns.length; i++){
           addColumns[i].style.display="table-cell";
           addColumns[i].style.width="20%";
       }
       for (i=0; i < moveColumns.length; i++){
           moveColumns[i].style.width="15%";
       }
       for (i=0; i < firstTD.length; i++){
           firstTD[i].style.width="12%";
       }
       for (i=0; i < lastTD.length; i++){
           lastTD[i].style.width="20%";
       }
       document.getElementById("tcc-startTimeText").innerHTML="Clock-in";
       document.getElementById("tcc-endTimeText").innerHTML="Clock-out";
    }
    else {
        for (i=0; i < removableColumn.length; i++){
           removableColumn[i].style.display="table-cell";
       }
       for (i=0; i < addColumns.length; i++){
           addColumns[i].style.display="none";
       }
       for (i=0; i < moveColumns.length; i++){
           moveColumns[i].style.width="initial";
       }
       document.getElementById("tcc-startTimeText").innerHTML="Start time";
       document.getElementById("tcc-endTimeText").innerHTML="End time";
    }
}
function showAdditionalOptions(checkbox) {
    let additionalOptions=document.getElementById("tcc-additionaloptions");
    if (checkbox.checked){
        additionalOptions.style.display="block";
    }
    else additionalOptions.style.display="none";
}
function leadingZeros(input) {
    if(input.value.length === 1) {
      input.value='0' + input.value;
    }
  }
function totalTime(day, startHour, startMinute, endHour, endMinute, breakHour, breakMinute, sel1, sel2, startBreakHour, startBreakMinute, endBreakHour, endBreakMinute, sel3, sel4) {
function dayCheck(){
    if (day == "Monday"){
        document.getElementById("m_total").value = (Math.round(total *100)/100).toFixed(2); 
        document.getElementById("total").innerHTML=(Math.round(total *100)/100).toFixed(2);}
    else if (day == "Tuesday"){
        document.getElementById("t_total").value = (Math.round(total *100)/100).toFixed(2); 
        document.getElementById("total2").innerHTML=(Math.round(total*100)/100).toFixed(2);}
    else if (day == "Wednesday"){
        document.getElementById("w_total").value = (Math.round(total *100)/100).toFixed(2); 
        document.getElementById("total3").innerHTML=(Math.round(total*100)/100).toFixed(2);}
    else if (day == "Thursday"){
        document.getElementById("th_total").value = (Math.round(total *100)/100).toFixed(2); 
        document.getElementById("total4").innerHTML=(Math.round(total*100)/100).toFixed(2);}
    else if (day == "Friday"){
        document.getElementById("f_total").value = (Math.round(total *100)/100).toFixed(2); 
        document.getElementById("total5").innerHTML=(Math.round(total*100)/100).toFixed(2);}
    else if (day == "Saturday"){
        document.getElementById("sa_total").value = (Math.round(total *100)/100).toFixed(2);
        document.getElementById("total6").innerHTML=(Math.round(total*100)/100).toFixed(2);}
    else if (day == "Sunday"){
        document.getElementById("su_total").value = (Math.round(total *100)/100).toFixed(2);
        document.getElementById("total7").innerHTML=(Math.round(total*100)/100).toFixed(2);}
}
function valueCheck(){
    // if (startHour < 0 || startMinute < 0 || endHour < 0 || endMinute <0 || breakHour < 0 || breakMinute <0)
    // {
    //     alert("Please enter values above 0");
    //     inputReset();
    //     calcAll();
    //     calcTotal();
    // }
    if (startHour > 24 || endHour > 24 || breakHour > 24)
    {
        alert("Hours must be 24 or less");
        inputReset();
        calcAll();
        calcTotal();
    }
    if (startMinute > 60 || endMinute > 60 || breakMinute > 60)
    {
        alert("Minutes must be 60 or less");
        inputReset();
        calcAll();
        calcTotal();
    }
    if (((sel1 > 23 && startHour > 12) || (sel2 > 23 && endHour > 12)) && document.getElementById("tcc-24hrFormat").checked == false)
    {
        alert("Post meridiem time should be 12 or lower for proper calculation");
    }
}
if (document.getElementById("tcc-breakStartEndTime").checked == true) {
    if (document.getElementById("tcc-24hrFormat").checked){
        if ((startBreakMinute < endBreakMinute || startBreakMinute === endBreakMinute)){
    breakHour=endBreakHour - startBreakHour;
    breakMinute=endBreakMinute - startBreakMinute;
        } else{
    breakHour=endBreakHour-1 - startBreakHour;
    breakMinute=endBreakMinute - startBreakMinute+60;   
        }
    }
    else {
    if (((sel3 < 24 && sel4 < 24) || (sel3 > 23 && sel4 > 23)) && (startBreakMinute < endBreakMinute || startBreakMinute === endBreakMinute)){
    breakHour=endBreakHour - startBreakHour;
    breakMinute=endBreakMinute - startBreakMinute;
    }
    else if (((sel3 < 24 && sel4 < 24) || (sel3 > 23 && sel4 > 23)) && (startBreakMinute > endBreakMinute)){
    breakHour=endBreakHour-1 - startBreakHour;
    breakMinute=endBreakMinute - startBreakMinute+60;
    }
    else if (((sel3 < 24 && sel4 > 23) || (sel3 > 23 && sel4 < 24)) && (startBreakMinute < endBreakMinute || startBreakMinute === endBreakMinute)){
    breakHour=endBreakHour+12 - startBreakHour;
    breakMinute=endBreakMinute - startBreakMinute;
    }
    else if (((sel3 < 24 && sel4 > 23) || (sel3 > 23 && sel4 < 24)) && (startBreakMinute > endBreakMinute)){
    breakHour=endBreakHour+11 - startBreakHour;
    breakMinute=endBreakMinute - startBreakMinute+60;
    }
}
}
if (document.getElementById("tcc-24hrFormat").checked){
    if (startMinute < endMinute || startMinute == endMinute){
    let resultHour=endHour - startHour - breakHour;
    let resultMinute=(endMinute - startMinute)/60;
    var total=resultHour + resultMinute;
    if (resultMinute*60 > breakMinute || resultMinute*60 == breakMinute){
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
    }
    else{
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
            }
        } else {
    let resultHour=endHour-1 - startHour - breakHour;
    let resultMinute=(endMinute - startMinute + 60)/60;
    var total=resultHour + resultMinute;
    if (resultMinute*60 > breakMinute || resultMinute*60 == breakMinute){
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
    }
    else {
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
            }
        }
    }
else {
if (((sel1 < 24 && sel2 > 23) || (sel1 > 23 && sel2 < 24)) && (startMinute < endMinute || startMinute == endMinute)){
    let resultHour=endHour +12 - startHour - breakHour;
    let resultMinute=(endMinute-startMinute)/60;;
    var total=resultHour + resultMinute;
    if (resultMinute*60 > breakMinute || resultMinute === breakMinute){
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
    }
    else {
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
    }
}
else if (((sel1 < 24 && sel2 > 23) || (sel1 > 23 && sel2 < 24)) && startMinute > endMinute){
    let resultHour=endHour+11 - startHour - breakHour;
    let resultMinute=(endMinute - startMinute + 60)/60;
    var total=resultHour + resultMinute;
    if (resultMinute*60 > breakMinute || resultMinute*60 == breakMinute){
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
    }
    else{
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck(); 
        calcTotal();
    }
}
if (((sel1 < 24 && sel2 < 24) || (sel1 > 23 && sel2 > 23)) && (startMinute < endMinute || startMinute == endMinute)){
    let resultHour=endHour - startHour - breakHour;
    let resultMinute=(endMinute - startMinute)/60;
    var total=resultHour + resultMinute;
    if (resultMinute*60 > breakMinute || resultMinute*60 == breakMinute){
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
    }
    else{
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
    }
}
else if (((sel1 < 24 && sel2 < 24) || (sel1 > 23 && sel2 > 23)) && startMinute > endMinute){
    let resultHour=endHour-1 - startHour - breakHour;
    let resultMinute=(endMinute - startMinute + 60)/60;
    var total=resultHour + resultMinute;
    if (resultMinute*60 > breakMinute || resultMinute*60 == breakMinute){
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
    }
    else {
        total=total - (breakMinute/60) || 0;
        dayCheck();
        valueCheck();
        calcTotal();
            }
        }
    }
}
function calcTotal(){
let calctotal=parseFloat(document.getElementById("total").innerHTML) + parseFloat(document.getElementById("total2").innerHTML) + parseFloat(document.getElementById("total3").innerHTML) + 
parseFloat(document.getElementById("total4").innerHTML) + parseFloat(document.getElementById("total5").innerHTML) + parseFloat(document.getElementById("total6").innerHTML) + 
parseFloat(document.getElementById("total7").innerHTML);
document.getElementById("tcc-totalhours").innerHTML=calctotal.toFixed(2);
document.getElementById("total_hrs").value=calctotal.toFixed(2);
document.getElementById("tcc-totalhoursprint").innerHTML=calctotal.toFixed(2);
}
function calcTotalPay(){
    let caclPay=document.getElementById("tcc-calcPay");
    let OTcalcPay=document.getElementById("tcc-calcOvertime");
    let totalPay=parseFloat(document.getElementById("tcc-totalhours").innerHTML);
    let overtimeHours=parseFloat(document.getElementById("tcc-overtimeTotalhours").innerHTML);
    let payRate=document.getElementById("tcc-payrateinput").value;
    let afterHours=document.getElementById("tcc-overtimevalueinput").value;
    let rateMultiplier=document.getElementById("tcc-overtimerateinput").value;
    let separateTotals=document.getElementsByClassName("tcc-total");
    let sum=0;
    let OTsum=0;
    let sum2=0;
    let OTsum2=0;
    document.getElementById("tcc-currencySymbol").innerText=document.getElementById("tcc-currencies").value.toString();
    document.getElementById("tcc-currencyOvertimeSymbol").innerText=document.getElementById("tcc-currencies").value.toString();
    if(document.getElementById("tcc-calcPay").checked){
    document.getElementById("tcc-calculatePaysDiv").style.display="contents";
    document.getElementById("tcc-calculateOvertimePay").style.display="none";
    if (document.getElementById("tcc-showOvertime").checked){
        document.getElementById("tcc-calculateOvertimePay").style.display="block";
    }
    if ((document.getElementById("tcc-overtimevalues").selectedIndex == 1 && (totalPay > afterHours && document.getElementById("tcc-calcOvertime").checked))){
    document.getElementById("tcc-totalPayValue").innerHTML=(((totalPay - (totalPay - afterHours))*payRate) + (totalPay - afterHours)*payRate*rateMultiplier).toFixed(2);
    document.getElementById("total_price").value=(((totalPay - (totalPay - afterHours))*payRate) + (totalPay - afterHours)*payRate*rateMultiplier).toFixed(2);
    document.getElementById("tcc-totalOvertimePayValue").innerHTML=((totalPay - afterHours)*payRate*rateMultiplier).toFixed(2);
    document.getElementById("tcc-overtimeTotalhours").innerHTML=(totalPay - afterHours).toFixed(2);
        }
    if (document.getElementById("tcc-overtimevalues").selectedIndex == 0){
        for (i=0; i < separateTotals.length; i++){
        if (parseFloat(separateTotals[i].innerHTML) > afterHours && document.getElementById("tcc-calcOvertime").checked){
            sum=(((parseFloat(separateTotals[i].innerHTML) - (parseFloat(separateTotals[i].innerHTML) - afterHours))*payRate) + (parseFloat(separateTotals[i].innerHTML) - afterHours)*payRate*rateMultiplier) + sum;
            OTsum=((parseFloat(separateTotals[i].innerHTML) - afterHours)*payRate*rateMultiplier) + OTsum;
            OTsum2=parseFloat(separateTotals[i].innerHTML) - afterHours + OTsum2;
            document.getElementById("tcc-overtimeTotalhours").innerHTML=OTsum2.toFixed(2);
        }
        else {
            // sum2=totalPay*payRate;
            sum2=parseFloat(separateTotals[i].innerHTML)*payRate +sum2;
            document.getElementById("tcc-totalPayValue").innerHTML=sum2.toFixed(2);
            document.getElementById("total_price").value=sum2.toFixed(2);
            document.getElementById("tcc-overtimeTotalhours").innerHTML=OTsum2.toFixed(2);
        }
        }
        if (sum != 0){
        document.getElementById("tcc-totalPayValue").innerHTML=(sum+sum2).toFixed(2);
        document.getElementById("total_price").value=(sum+sum2).toFixed(2);}
        document.getElementById("tcc-totalOvertimePayValue").innerHTML=OTsum.toFixed(2);
    }
    if (document.getElementById("tcc-overtimevalues").selectedIndex == 0 && document.getElementById("tcc-calcOvertime").checked == false) {
    document.getElementById("tcc-totalPayValue").innerHTML=(totalPay*payRate).toFixed(2);
    document.getElementById("total_price").value=(totalPay*payRate).toFixed(2);
    document.getElementById("tcc-totalOvertimePayValue").innerHTML=0.00;
    document.getElementById("tcc-overtimeTotalhours").innerHTML=0.00;
    }
    if (document.getElementById("tcc-overtimevalues").selectedIndex == 1 && (totalPay > afterHours && document.getElementById("tcc-calcOvertime").checked == false)){
    document.getElementById("tcc-totalPayValue").innerHTML=(totalPay*payRate).toFixed(2);
    document.getElementById("total_price").value=(totalPay*payRate).toFixed(2);
    document.getElementById("tcc-totalOvertimePayValue").innerHTML=0.00;
    document.getElementById("tcc-overtimeTotalhours").innerHTML=0.00;
    // document.getElementById("tcc-totalOvertimePayValue").innerHTML=(totalPay - afterHours)*payRate*rateMultiplier;
    }
    }
    else {
    document.getElementById("tcc-totalPayValue").innerHTML=0.00;
    document.getElementById("total_price").value=0.00;
    document.getElementById("tcc-totalOvertimePayValue").innerHTML=0.00;
    document.getElementById("tcc-overtimeTotalhours").innerHTML=0.00;
    document.getElementById("tcc-calculatePaysDiv").style.display="none";
    }
    if (parseFloat(document.getElementById("tcc-overtimeTotalhours").innerHTML) == 0){
        document.getElementById("tcc-overtimeTotalhours").innerHTML=parseFloat(document.getElementById("tcc-overtimeTotalhours").innerHTML).toFixed(2);
    }
    if (parseFloat(document.getElementById("tcc-totalOvertimePayValue").innerHTML) == 0){
        document.getElementById("tcc-totalOvertimePayValue").innerHTML=parseFloat(document.getElementById("tcc-totalOvertimePayValue").innerHTML).toFixed(2);
    }
}
function showOvertimePay(checkbox){
    if(checkbox.checked == true){
        document.getElementById("tcc-calculateOvertimePay").style.display="inline";
        document.getElementById("tcc-overtimeHoursSpan").style.display="inline";
    }
    else {
    document.getElementById("tcc-calculateOvertimePay").style.display="none";
    document.getElementById("tcc-overtimeHoursSpan").style.display="none";
    }
}
function showOnlyOvertime(){
    if(document.getElementById("tcc-calcOvertime").checked && document.getElementById("tcc-calcPay").checked == false && document.getElementById("tcc-showOvertime").checked == false){
        document.getElementById("tcc-overtimeHoursSpan").style.display="inline";
        // document.getElementById("tcc-calculateRegularPay").style.display="none";
    } else if (document.getElementById("tcc-calcOvertime").checked == false && document.getElementById("tcc-calcPay").checked == false && document.getElementById("tcc-showOvertime").checked){
        document.getElementById("tcc-overtimeHoursSpan").style.display="none";
    }
}
    // else {
    // }
function formReset(){
if(confirm('Are you sure? All data will be reset.')){
let forms=document.getElementsByClassName("form");
let totals=document.getElementsByClassName("tcc-total");
for (i=0; i<forms.length;i++){
    forms[i].reset();
    totals[i].innerHTML="0.00";
    }
document.getElementById("tcc-totalhours").innerHTML="0.00";
document.getElementById("total_hrs").value="0.00";
document.getElementById("tcc-totalhoursprint").innerHTML="0.00";
document.getElementById("tcc-totalPayValue").innerHTML=0;
document.getElementById("total_price").value=0;
document.getElementById("tcc-totalOvertimePayValue").innerHTML=0;
document.getElementById("tcc-payrateinput").value=0;
document.getElementById("tcc-overtimevalueinput").value=0;
document.getElementById("tcc-overtimerateinput").value=0;
    }
}
function inputReset(){
    let inputs=document.getElementsByTagName("input");
    let totals=document.getElementsByClassName("tcc-total");
    for (i=5; i < inputs.length; i+= 2){
        if (inputs[i].value > 24 || inputs[i].value < 0){
            inputs[i].value="   " + 0;
        };
    }
    for (i=6; i < inputs.length; i+=2){
        if (inputs[i].value > 60 || inputs[i].value < 0){
            inputs[i].value="0" + 0;
        }
    }
}
function dateSet(){
let date1=document.getElementById("tcc-leftdate").value;
document.getElementById("tcc-printleftdate").value=date1;
let date2=document.getElementById("tcc-rightdate").value;
document.getElementById("tcc-printrightdate").value=date2;
}
function Monday(){
totalTime('Monday', 
parseInt(document.getElementById("tcc-startBreakHR14").value), 
parseInt(document.getElementById("tcc-startBreakMin14").value), 
parseInt(document.getElementById("tcc-endBreakHR14").value), 
parseInt(document.getElementById("tcc-endBreakMin14").value), 
parseInt(breakHR.value), 
parseInt(breakMin.value), 
parseInt(document.getElementById("tccselectB15").selectedIndex), 
parseInt(document.getElementById("tccselectB16").selectedIndex),
parseInt(document.getElementById("tcc-startBreakHR0").value),
parseInt(document.getElementById("tcc-startBreakMin0").value),
parseInt(document.getElementById("tcc-endBreakHR0").value),
parseInt(document.getElementById("tcc-endBreakMin0").value),
parseInt(document.getElementById("tccselectB1").selectedIndex),
parseInt(document.getElementById("tccselectB2").selectedIndex)
);
}
function Tuesday(){
totalTime('Tuesday', 
parseInt(document.getElementById("tcc-startBreakHR16").value), 
parseInt(document.getElementById("tcc-startBreakMin16").value), 
parseInt(document.getElementById("tcc-endBreakHR16").value), 
parseInt(document.getElementById("tcc-endBreakMin16").value), 
parseInt(breakHR2.value), 
parseInt(breakMin2.value), 
parseInt(document.getElementById("tccselectB17").selectedIndex), 
parseInt(document.getElementById("tccselectB18").selectedIndex),
parseInt(document.getElementById("tcc-startBreakHR2").value),
parseInt(document.getElementById("tcc-startBreakMin2").value),
parseInt(document.getElementById("tcc-endBreakHR2").value),
parseInt(document.getElementById("tcc-endBreakMin2").value),
parseInt(document.getElementById("tccselectB3").selectedIndex),
parseInt(document.getElementById("tccselectB4").selectedIndex));
}
function Wednesday(){
totalTime('Wednesday', 
parseInt(document.getElementById("tcc-startBreakHR18").value), 
parseInt(document.getElementById("tcc-startBreakMin18").value), 
parseInt(document.getElementById("tcc-endBreakHR18").value), 
parseInt(document.getElementById("tcc-endBreakMin18").value), 
parseInt(breakHR3.value), 
parseInt(breakMin3.value), 
parseInt(document.getElementById("tccselectB19").selectedIndex), 
parseInt(document.getElementById("tccselectB20").selectedIndex),
parseInt(document.getElementById("tcc-startBreakHR4").value),
parseInt(document.getElementById("tcc-startBreakMin4").value),
parseInt(document.getElementById("tcc-endBreakHR4").value),
parseInt(document.getElementById("tcc-endBreakMin4").value),
parseInt(document.getElementById("tccselectB5").selectedIndex),
parseInt(document.getElementById("tccselectB6").selectedIndex));
}
function Thursday(){
totalTime('Thursday', 
parseInt(document.getElementById("tcc-startBreakHR20").value), 
parseInt(document.getElementById("tcc-startBreakMin20").value), 
parseInt(document.getElementById("tcc-endBreakHR20").value), 
parseInt(document.getElementById("tcc-endBreakMin20").value), 
parseInt(breakHR4.value), 
parseInt(breakMin4.value), 
parseInt(document.getElementById("tccselectB21").selectedIndex), 
parseInt(document.getElementById("tccselectB22").selectedIndex),
parseInt(document.getElementById("tcc-startBreakHR6").value),
parseInt(document.getElementById("tcc-startBreakMin6").value),
parseInt(document.getElementById("tcc-endBreakHR6").value),
parseInt(document.getElementById("tcc-endBreakMin6").value),
parseInt(document.getElementById("tccselectB7").selectedIndex),
parseInt(document.getElementById("tccselectB8").selectedIndex));
}
function Friday(){
totalTime('Friday', 
parseInt(document.getElementById("tcc-startBreakHR22").value), 
parseInt(document.getElementById("tcc-startBreakMin22").value), 
parseInt(document.getElementById("tcc-endBreakHR22").value), 
parseInt(document.getElementById("tcc-endBreakMin22").value), 
parseInt(breakHR5.value), 
parseInt(breakMin5.value), 
parseInt(document.getElementById("tccselectB23").selectedIndex), 
parseInt(document.getElementById("tccselectB24").selectedIndex),
parseInt(document.getElementById("tcc-startBreakHR8").value),
parseInt(document.getElementById("tcc-startBreakMin8").value),
parseInt(document.getElementById("tcc-endBreakHR8").value),
parseInt(document.getElementById("tcc-endBreakMin8").value),
parseInt(document.getElementById("tccselectB9").selectedIndex),
parseInt(document.getElementById("tccselectB10").selectedIndex));
}
function Saturday(){
totalTime('Saturday', 
parseInt(document.getElementById("tcc-startBreakHR24").value), 
parseInt(document.getElementById("tcc-startBreakMin24").value), 
parseInt(document.getElementById("tcc-endBreakHR24").value), 
parseInt(document.getElementById("tcc-endBreakMin24").value), 
parseInt(breakHR6.value), 
parseInt(breakMin6.value), 
parseInt(document.getElementById("tccselectB25").selectedIndex), 
parseInt(document.getElementById("tccselectB26").selectedIndex),
parseInt(document.getElementById("tcc-startBreakHR10").value),
parseInt(document.getElementById("tcc-startBreakMin10").value),
parseInt(document.getElementById("tcc-endBreakHR10").value),
parseInt(document.getElementById("tcc-endBreakMin10").value),
parseInt(document.getElementById("tccselectB11").selectedIndex),
parseInt(document.getElementById("tccselectB12").selectedIndex));
}
function Sunday(){
totalTime('Sunday', 
parseInt(document.getElementById("tcc-startBreakHR26").value), 
parseInt(document.getElementById("tcc-startBreakMin26").value), 
parseInt(document.getElementById("tcc-endBreakHR26").value), 
parseInt(document.getElementById("tcc-endBreakMin26").value), 
parseInt(breakHR7.value), 
parseInt(breakMin7.value), 
parseInt(document.getElementById("tccselectB27").selectedIndex), 
parseInt(document.getElementById("tccselectB28").selectedIndex),
parseInt(document.getElementById("tcc-startBreakHR12").value),
parseInt(document.getElementById("tcc-startBreakMin12").value),
parseInt(document.getElementById("tcc-endBreakHR12").value),
parseInt(document.getElementById("tcc-endBreakMin12").value),
parseInt(document.getElementById("tccselectB13").selectedIndex),
parseInt(document.getElementById("tccselectB14").selectedIndex));
}
function calcAll(){
Monday();
Tuesday();
Wednesday();
Thursday();
Friday();
Saturday();
Sunday();
}
if (Date.today().is().monday()){
    document.getElementById("tcc-leftdate").value=Date.today().toString('yyyy-MM-dd');
}
else {
    document.getElementById("tcc-leftdate").value=Date.today().last().monday().toString('yyyy-MM-dd');
}
if (Date.today().is().sunday()){
    document.getElementById("tcc-rightdate").value=Date.today().toString('yyyy-MM-dd');
}
else {
    document.getElementById("tcc-rightdate").value=Date.today().next().sunday().toString('yyyy-MM-dd');
}
document.getElementById("tcc-printleftdate").value=document.getElementById("tcc-leftdate").value;
document.getElementById("tcc-printrightdate").value=document.getElementById("tcc-rightdate").value;
function putDash(){
    const element=document.querySelectorAll("input");
    for (i=5; i < element.length; i+=2){
    if ((element[i].value === '   0' || element[i].value === 0 || element[i].value === 00 || element[i].value === '00' || element[i].value === '0' || element[i].value === '0 ') && (element[i+1].value === '0 ' || element[i+1].value === '   0' || element[i+1].value === 0 || element[i+1].value === 00 || element[i+1].value === '00')){
        element[i].value="- ";
        element[i+1].value="-";
        }
    }
}
function setNameForPrint(){
    if (document.getElementById("tcc-name").value === "" || document.getElementById("tcc-name").value === undefined || document.getElementById("tcc-name").value === null){
        document.getElementById("tcc-h1").innerHTML="Weekly time card";
    } else {
        document.getElementById("tcc-h1").innerHTML=document.getElementById("tcc-name").value;
    }
}
function TwentyFourHourMode(checkbox){
    let allSelectOptions=document.getElementsByTagName("select");
if (checkbox.checked == true ){
    for (j=0; j<allSelectOptions.length-1; j++){
    for (i=0; i<allSelectOptions[j].options.length; i+=2){
        allSelectOptions[j].options[i].innerHTML=i/2 + ":" + "00";
        allSelectOptions[j].options[i+1].innerHTML=i/2 + ":" + "30";
    }
}
    for (i=0; i < allSelectOptions.length-1; i++){
        allSelectOptions[i].style.float="left";
        allSelectOptions[i].style.width="85px";
       }
}
else {
    for (j=0; j<allSelectOptions.length-1; j++){
    for (i=0; i<allSelectOptions[j].options.length; i+=2){
        allSelectOptions[j].options[i].innerHTML=i/2 + ":" + "00" + " " + "AM";
        allSelectOptions[j].options[i+1].innerHTML=i/2 + ":" + "30" + " " + "AM";
        if (i > 23){
        allSelectOptions[j].options[i].innerHTML=i/2-12 + ":" + "00" + " " + "PM";
        allSelectOptions[j].options[i+1].innerHTML=i/2-12 + ":" + "30" + " " + "PM";
        }
    }
}
    for (i=0; i < allSelectOptions.length-1; i++){
        allSelectOptions[i].style.float="initial";
        allSelectOptions[i].style.width="110px";
       }
}
}
function exportTableToCSV($table, filename) {
    var $headers=$table.find('tr:has(th)')
    ,$rows=$table.find('tr:has(td)')
    // Temporary delimiter characters unlikely to be typed by keyboard
    // This is to avoid accidentally splitting the actual contents
    ,tmpColDelim=String.fromCharCode(11) // vertical tab character
    ,tmpRowDelim=String.fromCharCode(0) // null character
    // actual delimiter characters for CSV format
    ,colDelim='","'
    ,rowDelim='"\r\n"';
    // Grab text from table into CSV formatted string
    var csv='"';
    csv += formatRows($headers.map(grabRow));
    csv += rowDelim;
    csv += formatRows($rows.map(grabRow)) + '"';
        // Data URI
        var csvData='data:application/csv;charset=utf-8,' + encodeURIComponent(csv);
    $(this)
        .attr({
        'download': filename
            ,'href': csvData
            ,'target' : '_blank' //if you want it to open in a new window
            });
    //------------------------------------------------------------
    // Helper Functions 
    //------------------------------------------------------------
    // Format the output so it has the appropriate delimiters
    function formatRows(rows){
        return rows.get().join(tmpRowDelim)
            .split(tmpRowDelim).join(rowDelim)
            .split(tmpColDelim).join(colDelim);
        }
        // Grab and format a row from the table
        function grabRow(i,row){
            var $row=$(row);
            //for some reason $cols=$row.find('td') || $row.find('th') won't work...
            var $cols=$row.find('td'); 
            if(!$cols.length) $cols=$row.find('th');  
            return $cols.map(grabCol)
                    .get().join(tmpColDelim);
        }
        // Grab and format a column from the table 
        function grabCol(j,col){
            var $col=$(col),
            $inputs=$col.find('input');
            if($inputs.length >=1){
        var $tot='';
                $.each((jQuery.parseJSON(JSON.stringify($inputs.map(function(k,inp)
                {
          var $inputElement=$(inp),
          $text=$inputElement.val()+":";
          var $object=JSON.stringify($text);
          //var newObject=JSON.parse(object);
          return JSON.parse($object);
        }))))
                ,function(){
          for(i=0;i<this.length;i++){
           $tot+=this[i];}
          }
                    );
                return $tot.substring(0,$tot.length-1);
          }
      else
        $text=$col.text();
        return $text.replace(/(\r\n|\n|\r)/gm, "");
            }
        }
$(".tcc-export88").click( function (event) {
// CSV
document.getElementById("tcc-printleftdate").value=document.getElementById("tcc-leftdate").value;
document.getElementById("tcc-printrightdate").value=document.getElementById("tcc-rightdate").value;

CSVExportName= "time-card-" + document.getElementById("tcc-leftdate").value + "-to-" + document.getElementById("tcc-rightdate").value + ".csv";

exportTableToCSV.apply(this, [$('#tcc-table'), CSVExportName]);
// IF CSV, don't do event.preventDefault() or return false
// We actually need this to be a typical hyperlink
})
function CommaFormatted() {
    let p=document.getElementById("tcc-totalPayValue");
    let delimiter=","; // replace comma if desired
  var a=p.innerHTML.toString().split('.',2)
    let d=a[1];
    if (d == undefined || d === undefined){
        d=0;
    }
  let i=parseInt(a[0]);
  if(isNaN(i)) { return ''; }
  let minus='';
  if(i < 0) { minus='-'; }
  i=Math.abs(i);
  let n=new String(i);
  var a=[];
  while(n.length > 3) {
    let nn=n.substr(n.length-3);
    a.unshift(nn);
    n=n.substr(0,n.length-3);
  }
  if(n.length > 0) { a.unshift(n); }
  n=a.join(delimiter);
  if(d.length < 1) { p.innerHTML=n; }
  else { p.innerHTML=n + '.' + d; }
    p.innerHTML=minus + p.innerHTML.toString();
    document.getElementById("tcc-totalPayValue").innerHTML=p.innerHTML;
  return p.innerHTML;
}





// script start

  timeZone = Intl.DateTimeFormat().resolvedOptions().timeZone;
  if (timeZone.indexOf("Asia/Calcutta") !== -1) {
    var callLink = document.querySelectorAll('.call-us-link'), i = 0, l = callLink.length; 
    for (i; i < l; i++) {callLink[i].style.display = 'none';} 
  }

if (localStorage.getItem('user') != null ) { 

  var userLoggedinBlock = document.querySelectorAll('.get-started'), i = 0, l = userLoggedinBlock.length;  
  for (i; i < l; i++) {userLoggedinBlock[i].style.display = 'none';} 

    if (localStorage.getItem('defaultWorkspace') != null ) {
      var workspaceInfo = JSON.parse(localStorage.getItem('defaultWorkspace'));
      if (workspaceInfo.workspaceSettings.canSeeTimeSheet == true) {
        document.getElementById("goToLinkAnchor").href ='/timesheet';
        document.getElementById("goToLinkText").innerText="Go to timesheet";
      }
    }

  }

  var request = new XMLHttpRequest();
  request.open('GET', 'https://api.clockify.me/api/users/user-count?days=30', true);
  request.onload = function () {
    var data = JSON.parse(this.response);
    if (data) {
      var NumberOfUsers = document.getElementsByClassName('NumberOfUsers');
      for(var i=0; i<NumberOfUsers.length; i++) {
        var element = NumberOfUsers[i];
        element.innerHTML = data.toLocaleString() + " people signed up last month";
      }
    } else {
      var CustomerLinks = document.getElementsByClassName('customer-link');
      for(var i=0; i<CustomerLinks.length; i++) {
        var element = CustomerLinks[i];
        element.style.display = "none";
      }
    }
  }
  request.send();