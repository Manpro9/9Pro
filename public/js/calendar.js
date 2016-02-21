var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
                    var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');

                    var Calendar = new Date();

                    var year = Calendar.getFullYear();     
                    var month = Calendar.getMonth();   
                    var today = Calendar.getDate();    
                    var weekday = Calendar.getDay();    

                    var DAYS_OF_WEEK = 7;    
                    var DAYS_OF_MONTH = 31;  
                    var cal;    

                    Calendar.setDate(1);    
                    Calendar.setMonth(month);    

                    var TR_start = '<TR>';
                    var TR_end = '</TR>';
                    var highlight_start = '<TD WIDTH="40"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=40><B><CENTER>';
                    var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
                    var TD_start = '<TD WIDTH="40" HEIGHT="30"><CENTER>';
                    var TD_end = '</CENTER></TD>';
                    cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB ALIGN=RIGHT><TR><TD>';
                    cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2 ALIGN=RIGHT>' + TR_start;
                    cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '"  BGCOLOR="#337ab7"><CENTER><Font color="#ffffff"><strong>';
                    cal += month_of_year[month]  + '   ' + year + '</strong></font>' + TD_end + TR_end;
                    cal += TR_start;

                    for(index=0; index < DAYS_OF_WEEK; index++)
                    {
                    if(weekday == index)
                    cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;
                    else
                    cal += TD_start + day_of_week[index] + TD_end;
                    }
                    cal += TD_end + TR_end;
                    cal += TR_start;
                    for(index=0; index < Calendar.getDay(); index++)
                    cal += TD_start + '  ' + TD_end;
                    for(index=0; index < DAYS_OF_MONTH; index++)
                    {
                    if( Calendar.getDate() > index )
                    {
                      // RETURNS THE NEXT DAY TO PRINT
                      week_day =Calendar.getDay();

                      // START NEW ROW FOR FIRST DAY OF WEEK
                      if(week_day == 0)
                      cal += TR_start;

                      if(week_day != DAYS_OF_WEEK)
                      {
                      var day  = Calendar.getDate();
                      if( today==Calendar.getDate() )
                      cal += highlight_start + day + highlight_end + TD_end;

                      else
                      cal += TD_start + day + TD_end;
                      }
                      if(week_day == DAYS_OF_WEEK)
                      cal += TR_end;
                      }
                      Calendar.setDate(Calendar.getDate()+1);

                    }
                    cal += '</TD></TR></TABLE></TABLE>';

                    document.write(cal);