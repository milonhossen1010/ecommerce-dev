
<!DOCTYPE html>
@php
    $logo = App\Models\Setting::find(1);
@endphp
<head>
    <meta name="author" content="COING Inc.">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $logo -> site_identify }}</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
     <!-- Toastr css-->
     <link rel="stylesheet" type="text/css" href="{{ asset('/') }}admin/assets/css/toastr.min.css">
    <link rel="stylesheet" href="{{asset('/')}}frontend/assets/css/style.css">
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KN9WZVL');

    </script>
    <!-- End Google Tag Manager -->
</head>

<body>

    <main role="main" class="content_pages">
        <div class="just-blue-bg">
            <header class="header-container" id="header-container-id" style="max-width: 1366px;">
                <!-- JSON-LD Schema -->
                <script src="{{asset('/')}}frontend/assets/js/json.js"></script>
                <div class="nav">

                    <div class="logo">
                        <a href="{{ route('homepage') }}"><img style="width: 100%;max-height:60px" class="blur-up lazyloaded" src="{{ asset('/') }}media/images/{{ $logo -> logo }}" alt=""></a>
                    </div>

                    <div class="menu">
                        <ul>
                            <li><a href="{{ route('login') }}">
                        @if (Auth::check())
                            Dashboard
                        @else
                        Login
                        @endif
                        </a></li>

                        @if (Auth::check())
                        <li><a href="#" class="logout-btn">logout</a></li>
                        @endif
                            
                        </ul>
                    </div>

                </div>
            </header>
            <section class="header-width margin-top-0 margin-bottom-0 just-blue-bg" style="max-width: 1366px; padding-bottom: 70px;">
                <div id="tcc-body">
                    <form action="{{ route('timecard.store') }}" method="POST">
                        @csrf
                        <div id="tcc-firstHalf"> <span id="tccallinonespan">

                                <div id="tcc-topleftprint">
                                    <h1 id="tcc-h1">Weekly time card</h1>
                                    <div id="tcc-image"><a href="https://clockify.me"><img
                                                src="https://clockify.me/assets/images/clockify-logo.svg"
                                                alt="Clockify"></a></div>
                                    <input id="tcc-printleftdate" type="date">
                                    <p id="tcc-dash">-</p><input id="tcc-printrightdate" type="date">
                                    <span id="tcc-printtotal">
                                        <p id="tcc-totalhoursprinttext">Total hours: </p>
                                        <p id="tcc-totalhoursprint">0.00</p>
                                    </span>
                                </div>
                                <!-- <div style="overflow-x:auto;"> -->


                                <table id="tcc-table">
                                    <tr id="tcc-table-first-row">
                                        <th class="tcc-firsttd" id="tcc-first">
                                            {{-- <input id="tcc-name" type="text" name="name" placeholder="Enter your name..."> --}}
                                        </th>
                                        <th class="tcc-topborder" id="tcc-secondTH"></th>
                                        <!-- <th class="tcc-topborder" id="tcc-thirdTH"></th> -->
                                        <th colspan="5" id="tcc-dateth" class="tcc-topborder">
                                            <div id="tcc-datesdiv">
                                                <input name="start_date" id="tcc-leftdate" class="tcc-date" type="date"
                                                    onchange="dateSet()" required>-
                                                <input name="end_date" id="tcc-rightdate" class="tcc-date" type="date"
                                                    onchange="dateSet()" required>
                                            </div>
                                        </th>

                                    </tr>
                                    <tr id="tcc-secondrow">
                                        <td class="tcc-firsttd tcc-tableHeaderText">
                                            <p class="tcc-weekday tcc-tableHeaderText">Day</p>
                                        </td>
                                        <td class="tcc-td tcc-tableHeaderText" id="tcc-startTimeText">
                                            <p class="tcc-tableHeaderText">Start time</p>
                                        </td>
                                        <td class="tcc-td tcc-tableHeaderText tcc-breakColumns">
                                            <p class="tcc-tableHeaderText">Break start</p>
                                        </td>
                                        <td class="tcc-td tcc-tableHeaderText tcc-breakColumns">
                                            <p class="tcc-tableHeaderText">Break end</p>
                                        </td>
                                        <td class="tcc-td tcc-tableHeaderText" id="tcc-endTimeText">
                                            <p class="tcc-tableHeaderText">End time</p>
                                        </td>
                                        <td class="tcc-td tcc-tableHeaderText tcc-removeTD">
                                            <p class="tcc-tableHeaderText">Break deduction
                                        </td>
                                        <td id="tcc-totalth" class="tcc-td tcc-tableHeaderText">
                                            <p id="tcc-totalText" class="tcc-tableHeaderText">Total</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tcc-firsttd">
                                            <p class="tcc-weekday">Monday</p>
                                        </td>
                                       
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR14" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR14"
                                                            onchange="Monday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin14" name="tcc-startBreakMin14"
                                                            onchange="Monday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="m_start_time" size="1" id="tccselectB15"
                                                            onchange="setMondayTimeStart();Monday();  calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- THE EXPERIMENTAL STARTBREAK TD-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR0" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR0"
                                                            onchange="Monday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin0" name="tcc-startBreakMin0"
                                                            onchange="Monday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB1"
                                                            onchange="setMondayBreakStart();Monday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- ^^^THE EXPERIMENTAL STARTBREAK TD^^^-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR0" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR0" onchange="Monday(); calcTotalPay();"
                                                            value="0" onfocus="this.value=''"
                                                            onblur="this.value=value || '   0'" maxlength="2" size="1"
                                                            maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin0" name="tcc-endBreakMin0"
                                                            onchange="Monday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB2"
                                                            onchange="setMondayBreakEnd();Monday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR14" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR14" onchange="Monday(); calcTotalPay();"
                                                            value="0" onfocus="this.value=''"
                                                            onblur="this.value=value || '   0'" maxlength="2" size="1"
                                                            maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin14" name="tcc-endBreakMin14"
                                                            onchange="Monday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="m_end_time" size="1" id="tccselectB16"
                                                            onchange="setMondayTimeEnd();Monday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td tcc-removeTD">
                                                <div class="tcc-firstdiv">
                                                    <input class="tcc-hoursinput tcc-breakDeduction" id="breakHR"
                                                        name="breakHR" value="0" onfocus="this.value=''"
                                                        onblur="this.value=value || '0'" maxlength="2" size="1"
                                                        onchange="Monday(); calcTotalPay();">
                                                    <p class="tcc-dots">:</p>
                                                    <input id="breakMin" class="tcc-min" name="breakMin" value="00"
                                                        onfocus="this.value=''" onblur="this.value=value || '00'"
                                                        maxlength="2" size="2"
                                                        onchange="Monday(); leadingZeros(this); calcTotalPay();">
                                                </div>
                                            </td>
                                            <td class="tcc-lasttd">
                                                <p id="total" class="tcc-total" name="total" value="0.00" size="2">0.00
                                                </p>
                                                <input id="m_total" type="hidden" name="m_total" size="2">
                                            </td>
                                     
                                    </tr>
                                    <tr>
                                        <td class="tcc-firsttd">
                                            <p class="tcc-weekday">Tuesday</p>
                                        </td>
                                       
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR16" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR16"
                                                            onchange="Tuesday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin16" name="tcc-startBreakMin16"
                                                            onchange="Tuesday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="t_start_time" size="1" id="tccselectB17"
                                                            onchange="setTuesdayTimeStart();Tuesday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR2" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR2"
                                                            onchange="Tuesday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin2" name="tcc-startBreakMin2"
                                                            onchange="Tuesday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB3"
                                                            onchange="setTuesdayBreakStart();Tuesday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- ^^^THE EXPERIMENTAL STARTBREAK TD^^^-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR2" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR2" onchange="Tuesday(); calcTotalPay();"
                                                            value="0" onfocus="this.value=''"
                                                            onblur="this.value=value || '   0'" maxlength="2" size="1"
                                                            maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin2" name="tcc-endBreakMin2"
                                                            onchange="Tuesday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB4"
                                                            onchange="setTuesdayBreakEnd();Tuesday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR16" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR16"
                                                            onchange="Tuesday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin16" name="tcc-endBreakMin16"
                                                            onchange="Tuesday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="t_end_time" size="1" id="tccselectB18" onchange="setTuesdayTimeEnd();Tuesday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td tcc-removeTD">
                                                <div class="tcc-firstdiv">
                                                    <input class="tcc-hoursinput tcc-breakDeduction" id="breakHR2"
                                                        name="breakHR2" value="0" onfocus="this.value=''"
                                                        onblur="this.value=value|| '0'" maxlength="2" size="1"
                                                        onchange="Tuesday(); calcTotalPay();">
                                                    <p class="tcc-dots">:</p>
                                                    <input id="breakMin2" class="tcc-min" name="breakMin2" value="00"
                                                        onfocus="this.value=''" onblur="this.value=value || '00'"
                                                        maxlength="2" size="2"
                                                        onchange="Tuesday(); leadingZeros(this); calcTotalPay();">
                                                </div>
                                            </td>
                                            <td class="tcc-lasttd">
                                                <p id="total2" class="tcc-total" name="total2" value="0.00" size="2">
                                                    0.00</p>
                                                    <input type="hidden" id="t_total" name="t_total">
                                            </td>
                                      
                                    </tr>
                                    <tr>
                                        <td class="tcc-firsttd">
                                            <p class="tcc-weekday">Wednesday</p>
                                        </td>
                                     
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR18" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR18"
                                                            onchange="Wednesday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin18" name="tcc-startBreakMin18"
                                                            onchange="Wednesday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="w_start_time" size="1" id="tccselectB19" onchange="setWednesdayTimeStart();Wednesday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- THE EXPERIMENTAL STARTBREAK TD-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR4" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR4"
                                                            onchange="Wednesday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin4" name="tcc-startBreakMin4"
                                                            onchange="Wednesday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB5"
                                                            onchange="setWednesdayBreakStart();Wednesday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- ^^^THE EXPERIMENTAL STARTBREAK TD^^^-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR4" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR4"
                                                            onchange="Wednesday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin4" name="tcc-endBreakMin4"
                                                            onchange="Wednesday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB6"
                                                            onchange="setWednesdayBreakEnd();Wednesday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR18" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR18"
                                                            onchange="Wednesday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin18" name="tcc-endBreakMin18"
                                                            onchange="Wednesday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="w_end_time" size="1" id="tccselectB20" onchange="setWednesdayTimeEnd(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td tcc-removeTD">
                                                <div class="tcc-firstdiv">
                                                    <input class="tcc-hoursinput tcc-breakDeduction" id="breakHR3"
                                                        name="breakHR3" value="0" onfocus="this.value=''"
                                                        onblur="this.value=value || '0'" maxlength="2" size="1"
                                                        onchange="Wednesday(); calcTotalPay();">
                                                    <p class="tcc-dots">:</p>
                                                    <input id="breakMin3" class="tcc-min" name="breakMin3" value="00"
                                                        onfocus="this.value=''" onblur="this.value=value || '00'"
                                                        maxlength="2" size="2"
                                                        onchange="Wednesday(); leadingZeros(this); calcTotalPay();">
                                                </div>
                                            </td>
                                            <td class="tcc-lasttd">
                                                <p id="total3" class="tcc-total" name="total3" value="0.00" size="2">
                                                    0.00</p>
                                                    <input type="hidden" id="w_total" name="w_total">
                                            </td>
                                      
                                    </tr>
                                    <tr>
                                        <td class="tcc-firsttd">
                                            <p class="tcc-weekday">Thursday</p>
                                        </td>
                                       
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR20" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR20"
                                                            onchange="Thursday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin20" name="tcc-startBreakMin20"
                                                            onchange="Thursday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" name="th_start_time" id="tccselectB21" onchange="setThursdayTimeStart();Thursday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- THE EXPERIMENTAL STARTBREAK TD-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR6" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR6"
                                                            onchange="Thursday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin6" name="tcc-startBreakMin6"
                                                            onchange="Thursday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB7"
                                                            onchange="setThursdayBreakStart();Thursday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- ^^^THE EXPERIMENTAL STARTBREAK TD^^^-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR6" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR6"
                                                            onchange="Thursday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin6" name="tcc-endBreakMin6"
                                                            onchange="Thursday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB8"
                                                            onchange="setThursdayBreakEnd();Thursday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR20" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR20"
                                                            onchange="Thursday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin20" name="tcc-endBreakMin20"
                                                            onchange="Thursday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="th_end_tiem" size="1" id="tccselectB22" onchange="setThursdayTimeEnd();Thursday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td tcc-removeTD">
                                                <div class="tcc-firstdiv">
                                                    <input class="tcc-hoursinput tcc-breakDeduction" id="breakHR4"
                                                        name="breakHR4" value="0" onfocus="this.value=''"
                                                        onblur="this.value=value || '0'" maxlength="2" size="1"
                                                        onchange="Thursday(); calcTotalPay();">
                                                    <p class="tcc-dots">:</p>
                                                    <input id="breakMin4" class="tcc-min" name="breakMin4" value="00"
                                                        onfocus="this.value=''" onblur="this.value=value || '00'"
                                                        maxlength="2" size="2"
                                                        onchange="Thursday(); leadingZeros(this); calcTotalPay();">
                                                </div>
                                            </td>
                                            <td class="tcc-lasttd">
                                                <p id="total4" class="tcc-total" name="total4" value="0.00" size="2">
                                                    0.00</p>
                                                    <input type="hidden" name="th_total" id="th_total">
                                            </td>
                                      
                                    </tr>
                                    <tr>
                                        <td class="tcc-firsttd">
                                            <p class="tcc-weekday">Friday</p>
                                        </td>
                                       
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR22" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR22"
                                                            onchange="Friday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin22" name="tcc-startBreakMin22"
                                                            onchange="Friday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="f_start_time" size="1" id="tccselectB23" onchange="setFridayTimeStart();Friday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- THE EXPERIMENTAL STARTBREAK TD-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR8" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR8"
                                                            onchange="Friday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin8" name="tcc-startBreakMin8"
                                                            onchange="Friday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB9"
                                                            onchange="setFridayBreakStart();Friday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- ^^^THE EXPERIMENTAL STARTBREAK TD^^^-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR8" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR8" onchange="Friday(); calcTotalPay();"
                                                            value="0" onfocus="this.value=''"
                                                            onblur="this.value=value || '   0'" maxlength="2" size="1"
                                                            maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin8" name="tcc-endBreakMin8"
                                                            onchange="Friday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB10"
                                                            onchange="setFridayBreakEnd();Friday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR22" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR22" onchange="Friday(); calcTotalPay();"
                                                            value="0" onfocus="this.value=''"
                                                            onblur="this.value=value || '   0'" maxlength="2" size="1"
                                                            maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin22" name="tcc-endBreakMin22"
                                                            onchange="Friday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="f_end_time" size="1" id="tccselectB24" onchange="setFridayTimeEnd();Friday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td tcc-removeTD">
                                                <div class="tcc-firstdiv">
                                                    <input class="tcc-hoursinput tcc-breakDeduction" id="breakHR5"
                                                        name="breakHR5" value="0" onfocus="this.value=''"
                                                        onblur="this.value=value || '0'" maxlength="2" size="1"
                                                        onchange="Friday(); calcTotalPay();">
                                                    <p class="tcc-dots">:</p>
                                                    <input id="breakMin5" class="tcc-min" name="breakMin5" value="00"
                                                        onfocus="this.value=''" onblur="this.value=value || '00'"
                                                        maxlength="2" size="2"
                                                        onchange="Friday(); leadingZeros(this); calcTotalPay();">
                                                </div>
                                            </td>
                                            <td class="tcc-lasttd">
                                                <p id="total5" class="tcc-total" name="total5" value="0.00" size="2">
                                                    0.00</p>
                                                    <input type="hidden" id="f_total" name="f_total">
                                            </td>
                                      
                                    </tr>
                                    <tr id="tcc-saturdayRow">
                                        <td class="tcc-firsttd">
                                            <p class="tcc-weekday">Saturday</p>
                                        </td>
                                     
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR24" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR24"
                                                            onchange="Saturday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin24" name="tcc-startBreakMin24"
                                                            onchange="Saturday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="sa_start_time" size="1" id="tccselectB25" onchange="setSaturdayTimeStart();Saturday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- THE EXPERIMENTAL STARTBREAK TD-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR10" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR10"
                                                            onchange="Saturday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin10" name="tcc-startBreakMin10"
                                                            onchange="Saturday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB11"
                                                            onchange="setSaturdayBreakStart();Saturday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- ^^^THE EXPERIMENTAL STARTBREAK TD^^^-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR10" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR10"
                                                            onchange="Saturday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin10" name="tcc-endBreakMin10"
                                                            onchange="Saturday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB12"
                                                            onchange="setSaturdayBreakEnd();Saturday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR24" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR24"
                                                            onchange="Saturday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin24" name="tcc-endBreakMin24"
                                                            onchange="Saturday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="sa_end_time" size="1" id="tccselectB26" onchange="setSaturdayTimeEnd();Saturday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td tcc-removeTD">
                                                <div class="tcc-firstdiv">
                                                    <input class="tcc-hoursinput tcc-breakDeduction" id="breakHR6"
                                                        name="breakHR6" value="0" onfocus="this.value=''"
                                                        onblur="this.value=value || '0'" maxlength="2" size="1"
                                                        onchange="Saturday(); calcTotalPay();">
                                                    <p class="tcc-dots">:</p>
                                                    <input id="breakMin6" class="tcc-min" name="breakMin6" value="00"
                                                        onfocus="this.value=''" onblur="this.value=value || '00'"
                                                        maxlength="2" size="2"
                                                        onchange="Saturday(); leadingZeros(this); calcTotalPay();">
                                                </div>
                                            </td>
                                            <td class="tcc-lasttd">
                                                <p id="total6" class="tcc-total" name="total6" value="0.00" size="2">
                                                    0.00</p>
                                                    <input type="hidden" name="sa_total" id="sa_total">
                                            </td>
                                        
                                    </tr>
                                    <tr id="tcc-sundayRow">
                                        <td class="tcc-firsttd">
                                            <p class="tcc-weekday">Sunday</p>
                                        </td>
                                        
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR26" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR26"
                                                            onchange="Sunday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin26" name="tcc-startBreakMin26"
                                                            onchange="Sunday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="su_start_time" size="1" id="tccselectB27" onchange="setSundayTimeStart();Sunday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- THE EXPERIMENTAL STARTBREAK TD-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-startBreakHR12" class="tcc-hoursinput"
                                                            name="tcc-startBreakHR12"
                                                            onchange="Sunday(); calcTotalPay();" value="0"
                                                            onfocus="this.value=''" onblur="this.value=value || '   0'"
                                                            maxlength="2" size="1" maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-startBreakMin12" name="tcc-startBreakMin12"
                                                            onchange="Sunday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB13"
                                                            onchange="setSundayBreakStart();Sunday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <!-- ^^^THE EXPERIMENTAL STARTBREAK TD^^^-->
                                            <td class="tcc-td tcc-breakColumns">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR12" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR12" onchange="Sunday(); calcTotalPay();"
                                                            value="0" onfocus="this.value=''"
                                                            onblur="this.value=value || '   0'" maxlength="2" size="1"
                                                            maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin12" name="tcc-endBreakMin12"
                                                            onchange="Sunday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select size="1" id="tccselectB14"
                                                            onchange="setSundayBreakEnd();Sunday(); calcTotalPay();">
                                                            <option>0:00 AM</option>
                                                            <option>0:30 AM</option>
                                                            <option>1:00 AM</option>
                                                            <option>1:30 AM</option>
                                                            <option>2:00 AM</option>
                                                            <option>2:30 AM</option>
                                                            <option>3:00 AM</option>
                                                            <option>3:30 AM</option>
                                                            <option>4:00 AM</option>
                                                            <option>4:30 AM</option>
                                                            <option>5:00 AM</option>
                                                            <option>5:30 AM</option>
                                                            <option>6:00 AM</option>
                                                            <option>6:30 AM</option>
                                                            <option>7:00 AM</option>
                                                            <option>7:30 AM</option>
                                                            <option>8:00 AM</option>
                                                            <option>8:30 AM</option>
                                                            <option>9:00 AM</option>
                                                            <option>9:30 AM</option>
                                                            <option>10:00 AM</option>
                                                            <option>10:30 AM</option>
                                                            <option>11:00 AM</option>
                                                            <option>11:30 AM</option>
                                                            <option>0:00 PM</option>
                                                            <option>0:30 PM</option>
                                                            <option>1:00 PM</option>
                                                            <option>1:30 PM</option>
                                                            <option>2:00 PM</option>
                                                            <option>2:30 PM</option>
                                                            <option>3:00 PM</option>
                                                            <option>3:30 PM</option>
                                                            <option>4:00 PM</option>
                                                            <option>4:30 PM</option>
                                                            <option>5:00 PM</option>
                                                            <option>5:30 PM</option>
                                                            <option>6:00 PM</option>
                                                            <option>6:30 PM</option>
                                                            <option>7:00 PM</option>
                                                            <option>7:30 PM</option>
                                                            <option>8:00 PM</option>
                                                            <option>8:30 PM</option>
                                                            <option>9:00 PM</option>
                                                            <option>9:30 PM</option>
                                                            <option>10:00 PM</option>
                                                            <option>10:30 PM</option>
                                                            <option>11:00 PM</option>
                                                            <option>11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td">
                                                <div class="tcc-wrappertest">
                                                    <div class="tcc-firstdivtest">
                                                        <input id="tcc-endBreakHR26" class="tcc-hoursinput"
                                                            name="tcc-endBreakHR26" onchange="Sunday(); calcTotalPay();"
                                                            value="0" onfocus="this.value=''"
                                                            onblur="this.value=value || '   0'" maxlength="2" size="1"
                                                            maxlength="2" size="1">
                                                        <p class="tcc-dots">:</p>
                                                        <input id="tcc-endBreakMin26" name="tcc-endBreakMin26"
                                                            onchange="Sunday(); leadingZeros(this); calcTotalPay();"
                                                            value="00" onfocus="this.value=''"
                                                            onblur="this.value=value || '00'" class="tcc-min"
                                                            maxlength="2" size="2">
                                                    </div>
                                                    <div class="tcc-seconddivtest">
                                                        <select name="su_end_time" size="1" id="tccselectB28" onchange="setSundayTimeEnd();Sunday(); calcTotalPay();">
                                                            <option value="0:00 AM">0:00 AM</option>
                                                            <option value="0:30 AM">0:30 AM</option>
                                                            <option value="1:00 AM">1:00 AM</option>
                                                            <option value="1:30 AM">1:30 AM</option>
                                                            <option value="2:00 AM">2:00 AM</option>
                                                            <option value="2:30 AM">2:30 AM</option>
                                                            <option value="3:00 AM">3:00 AM</option>
                                                            <option value="3:30 AM">3:30 AM</option>
                                                            <option value="4:00 AM">4:00 AM</option>
                                                            <option value="4:30 AM">4:30 AM</option>
                                                            <option value="5:00 AM">5:00 AM</option>
                                                            <option value="5:30 AM">5:30 AM</option>
                                                            <option value="6:00 AM">6:00 AM</option>
                                                            <option value="6:30 AM">6:30 AM</option>
                                                            <option value="7:00 AM">7:00 AM</option>
                                                            <option value="7:30 AM">7:30 AM</option>
                                                            <option value="8:00 AM">8:00 AM</option>
                                                            <option value="8:30 AM">8:30 AM</option>
                                                            <option value="9:00 AM">9:00 AM</option>
                                                            <option value="9:30 AM">9:30 AM</option>
                                                            <option value="10:00 Am">10:00 AM</option>
                                                            <option value="10:30 Am">10:30 AM</option>
                                                            <option value="11:00 Am">11:00 AM</option>
                                                            <option value="11:30 Am">11:30 AM</option>
                                                            <option value="0:00 PM">0:00 PM</option>
                                                            <option value="0:30 PM">0:30 PM</option>
                                                            <option value="1:00 PM">1:00 PM</option>
                                                            <option value="1:30 PM">1:30 PM</option>
                                                            <option value="2:00 PM">2:00 PM</option>
                                                            <option value="2:30 PM">2:30 PM</option>
                                                            <option value="3:00 PM">3:00 PM</option>
                                                            <option value="3:30 PM">3:30 PM</option>
                                                            <option value="4:00 PM">4:00 PM</option>
                                                            <option value="4:30 PM">4:30 PM</option>
                                                            <option value="5:00 PM">5:00 PM</option>
                                                            <option value="5:30 PM">5:30 PM</option>
                                                            <option value="6:00 PM">6:00 PM</option>
                                                            <option value="6:30 PM">6:30 PM</option>
                                                            <option value="7:00 PM">7:00 PM</option>
                                                            <option value="7:30 PM">7:30 PM</option>
                                                            <option value="8:00 PM">8:00 PM</option>
                                                            <option value="8:30 PM">8:30 PM</option>
                                                            <option value="9:00 PM">9:00 PM</option>
                                                            <option value="9:30 PM">9:30 PM</option>
                                                            <option value="10:00 Pm">10:00 PM</option>
                                                            <option value="10:30 Pm">10:30 PM</option>
                                                            <option value="11:00 Pm">11:00 PM</option>
                                                            <option value="11:30 Pm">11:30 PM</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="tcc-td tcc-removeTD">
                                                <div class="tcc-firstdiv">
                                                    <input class="tcc-hoursinput tcc-breakDeduction" id="breakHR7"
                                                        name="breakHR7" value="0" onfocus="this.value=''"
                                                        onblur="this.value=value || '0'" maxlength="2" size="1"
                                                        onchange="Sunday(); calcTotalPay();">
                                                    <p class="tcc-dots">:</p>
                                                    <input id="breakMin7" class="tcc-min" name="breakMin7" value="00"
                                                        onfocus="this.value=''" onblur="this.value=value || '00'"
                                                        maxlength="2" size="2"
                                                        onchange="Sunday(); leadingZeros(this); calcTotalPay();">
                                                </div>
                                            </td>
                                            <td class="tcc-lasttd">
                                                <p id="total7" class="tcc-total" name="total7" value="0.00" size="2">
                                                    0.00</p>
                                                    <input type="hidden" name="su_total" id="su_total">
                                            </td>
                                      
                                    </tr>
                                    <tr id="tcc-lastrow">
                                        <td id="tcc-left" class="tcc-last"></td>
                                        <td class="tcc-last"></td>
                                        <td colspan="4" id="tcc-right" class="tcc-last">
                                            <div id="tcc-lasttdtogether">
                                                <div style="display: none" id="tcc-calculatePaysDiv1"> <span id="tcc-calculateRegularPay">Total
                                                        pay: <p id="tcc-currencySymbol">$</p>
                                                        <p id="tcc-totalPayValue" onclick="CommaFormatted()">0</p>
                                                        <input type="hidden" name="total_price" id="total_price">
                                                    </span> <span id="tcc-calculateOvertimePay">Overtime pay: <p
                                                            id="tcc-currencyOvertimeSymbol">$</p>
                                                        <p id="tcc-totalOvertimePayValue">0.00</p>
                                                       
                                                    </span> </div>
                                                <div id="tcc-calculateHoursDiv"> <span id="tcc-totalHoursSpan">
                                                        <p id="tcc-totalhrtd">Total hours: </p>
                                                        <p id="tcc-totalhours" name="tcc-totalhours" size="2">0.00</p>
                                                        <input type="hidden" name="total_hrs" id="total_hrs">
                                                    </span> <span id="tcc-overtimeHoursSpan">
                                                        <p id="tcc-overtimeTotalhrtd">Overtime hours: </p>
                                                        <p id="tcc-overtimeTotalhours" name="tcc-overtimeTotalhours"
                                                            size="2">0.00</p>
                                                    </span> </div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>


                                <p id="tcc-fixedNoteText">Note:</p>
                                <p id="tcc-noteText"></p>
                                {{-- <div id="tcc-textAreaDiv">
                                    <p>Add custom note: </p>
                                    <textarea id="tcc-textArea" placeholder="Type here..."></textarea>
                                    <div id="tcc-textAreaButtonDiv">
                                        <button type="button" id="tcc-textAreaButton"
                                            onclick="printChecked()">Print</button>
                                        <button id="tcc-textAreaCancelButton" type="button"
                                            onclick="closeTextArea()">Cancel</button>
                                    </div>
                                </div> --}}
                                <br>
                                {{-- <a href="#" class="tcc-export88">
                                    <button id="tcc-download" class="tcc-export88" type="submit">
                                        <p class="tcc-printtext">EXPORT (CSV)</p>
                                    </button>
                                </a> --}}
                                {{-- <button id="tcc-print" type="submit">
                                    <p class=" tcc-printtext">Save</p>
                                </button> --}}
                                <button id="tcc-calculate" type="submit"
                                    onclick="calcAll(); calcTotal();CommaFormatted()">
                                    <p id="tcc-calculatebuttontext">SUBMIT</p>
                                </button>
                                <button class="tcc-resetsend" type="button" onclick="formReset()">Reset</button>
                                {{-- <div id="tcc-showoptions">
                                    <label class="tcc-container">
                                        <input type="checkbox" onclick="showAdditionalOptions(this)">Advanced
                                        options<span class="tcc-checkmark"></span></label>
                                </div> --}}
                        </div>
                   
                    <div style="opacity: 0; display:none" id="tcc-additionaloptions">

                        <div id="tcc-checkboxes1">
                   
                            <label style="display:none" class="tcc-container">
                                <input id="tcc-24hrFormat" class="tcc-checkbox" type="checkbox"
                                    onclick="TwentyFourHourMode(this)">&#160;Use 24h time format<span
                                    class="tcc-checkmark"></span></label>
                            <br>
             
                            <label style="display: none" class="tcc-container">
                                <input id="tcc-breakStartEndTime" class="tcc-checkbox" type="checkbox"
                                    onclick="removeColumn(this)">&#160;Specify break start/end time<span
                                    class="tcc-checkmark"></span>
                            </label>
                        </div>

                        <div id="tcc-checkboxes2">
                            <label class="tcc-container">
                                <input id="tcc-calcPay" class="tcc-checkbox" type="checkbox" checked=""
                                    onchange="calcTotalPay()">&#160;Calculate pay<span
                                    class="tcc-checkmark"></span></label>
                            <br>
                            <label style="display: none" class="tcc-container">
                                <input id="tcc-showOvertime" class="tcc-checkbox" type="checkbox"
                                    onclick="showOvertimePay(this);">&#160;Calculate overtime<span
                                    class="tcc-checkmark"></span></label>
                            <br>
                            <label style="display: none" class="tcc-container">
                                <input id="tcc-calcOvertime" class="tcc-checkbox" type="checkbox"
                                    onchange="calcTotalPay();">&#160;Use overtime rate<span
                                    class="tcc-checkmark"></span></label>
                            <br>
                        </div>
                        <div id="tcc-basepaydiv">
                            <p id="tcc-basepaytext">Base pay rate & currency</p>
                            <input name="hourly_rate" id="tcc-payrateinput" type="number" step="0.01" value=25 onchange="calcTotalPay()">
                            <input id="tcc-currencies" type="text" value="$" onchange="calcTotalPay()">
                            <p id="tcc-perhourtext">per hour</p>
                        </div>
                        <div id="tcc-overtimediv">
                            <p id="tcc-overtimetext">Overtime after</p>
                            <input id="tcc-overtimevalueinput" type="number" step="0.01" value=8
                                onchange="calcTotalPay()">
                            <select id="tcc-overtimevalues" onchange="calcTotalPay()">
                                <option>hours per day</option>
                                <option>hours per week</option>
                            </select>
                        </div>
                        <div id="tcc-overtimeratediv">
                            <p id="tcc-overtimeratetext">Overtime rate</p>
                            <input id="tcc-overtimerateinput" type="number" step="0.01" value=1.5
                                onchange="calcTotalPay()">
                            <p id="tcc-baseratetext">times base rate</p>
                        </div>
                    </div>
                </form>
                   
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js"
                        integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous">
                    </script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/datejs/1.0/date.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js">
                    </script>
                </div>
                <div class="separator-no-top"></div>
            </section>
        </div>
    </main>
    <script src="{{asset('/')}}frontend/assets/js/script.js"></script>
     <!-- Toastr js-->
    <script src="{{ asset('/') }}admin/assets/js/toastr.min.js"></script>
 
    @include('validate')

    <script>
        $('.logout-btn').click(function(e){
            e.preventDefault();
            $("#logout-form").submit();
        });
    </script>
 
    @include('validate')

    <form id="logout-form" method="POST" action="{{ route('logout') }}">
        @csrf
    </form>

</body>

</html>
