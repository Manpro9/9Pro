@extends('layout.master')

@section('title')
	PSDM - Home
@endsection

@section('css')
	<!-- Home's CSS -->
@endsection

@section('scripts')
	<script type="text/javascript">

	$("#btnprevious").click(function(){
      console.log("s");
	});

	$('#next').click(function(){
	  var b = 1;
	  month = month + b;
	  Calendar.setMonth(month); 
	});

	</script>
@endsection

@section('content')
<style type="text/css">
  body {
    background-color: #fff;
  }
</style>


<div class="container" style="width:89%; margin-left: 130px;margin-top: 65px; padding-left: 90px; margin-right: 0%; padding-right: 0%;margin-bottom: 10px;">
	  <div class="col-sm-9">
	    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	      <!-- Indicators -->
	      <ol class="carousel-indicators">
	        <li id="c1" data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	        <li id="c2" data-target="#carousel-example-generic" data-slide-to="1"></li>
	        <li id="c3" data-target="#carousel-example-generic" data-slide-to="2"></li>
	      </ol>

	      <!-- Wrapper for slides -->
	      <div class="carousel-inner" role="listbox">
	        <div class="item active">
	          <img src="{{ asset('public/images/test.jpg') }}" class="banner" alt="gambar1">
	          <div class="carousel-caption">
	            <font size="4" face="Cooper Black"><strong></strong></font>
	          </div>
	        </div>
	        <div class="item">
	          <img src="{{ asset('public/images/test.jpg') }}" class="banner" alt="gambar2">
	          <div class="carousel-caption">
	            <font size="4" face="Cooper Black"><strong></strong></font>
	          </div>
	        </div>
	         <div class="item">
	          <img src="{{ asset('public/images/test.jpg') }}" class="banner" alt="gambar3">
	          <div class="carousel-caption">
	            <font size="4" face="Cooper Black"><strong></strong></font>
	          </div>
	        </div>

	        <!-- Controls -->
	        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	          <span class="sr-only">Previous</span>
	        </a>
	        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	          <span class="sr-only">Next</span>
	        </a>
	      </div>
	    </div>
	  </div>  
	  <div class="col-sm-3" style="padding-left:0px; padding-right:0px;">
	    <h4 style="text-align: left; margin-bottom:0px;"><b>AGENDA</b></h4>
	    <hr style="margin-top:3px; margin-bottom:10px;">
	      <div class="col-sm-12" style="padding-left:0%;">
	        <script language="javascript" type="text/javascript">
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
			cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '"  BGCOLOR="#337ab7"> <button type="button" style="float:left;" id="btnprevious"><span class="glyphicon glyphicon-chevron-left"></span></button> <CENTER><Font color="#ffffff"><strong>';
			cal += month_of_year[month]  + '   ' + year + '</strong></font>';
			cal += '<button type="button" id="btnnext" style="float:right;"><span class="glyphicon glyphicon-chevron-right"></span></button>' + TD_end + TR_end;
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
	        </script>
	      </div>
	  </div>
</div>
<div class="container" style="width:89%; margin-left: 130px;margin-top: 40px; padding-left: 90px; margin-right: 0%; padding-right: 0%;margin-bottom: 10px;">
	    <div class="col-sm-9" style="text-align:left;">
	      <h4><b>News Topic</b></h4>
	      <div class="row">
	        <div class="col-sm-3" style="border:1px solid black; margin-left:10px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar1">
	          <h5 style="text-align:center;"><b>judul berita</b></h5>
	        </div>
	        <div class="col-sm-3" style="border:1px solid black; margin-left:5px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar2">
	          <h5 style="text-align:center;"><b>judul berita</b></h5>
	        </div>
	        <div class="col-sm-3" style="border:1px solid black; margin-left:5px; padding-left:0px;padding-right:0px;">
	          <img src="{{ asset('public/images/test.jpg') }}" class="topic" alt="gambar3">
	          <h5 style="text-align:center;"><b>judul berita</b></h5>
	          
	        </div>
	      </div>
	    </div>

	    <div class="col-sm-3" style="padding-left:0px; padding-right:0px;">
	        <h4 style="text-align: left; margin-bottom:0px;"><b>Daftar Agenda (bulan yg aktif - April 2016)</b></h4>
	        <hr style="margin-top:3px; margin-bottom:10px;">
	    </div>
</div>
@endsection