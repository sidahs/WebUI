<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD><TITLE>Selamat Datang ke Halaman Mutiara Hadis</TITLE>
<META content="text/html; charset=iso-8859-1; Hadis; Nasai; Muslim, Bukhari; Majjah; Termizi; Melayu" http-equiv=Content-Type>
<STYLE type=text/css>A {
	TEXT-DECORATION: none
}a:hover {
	BACKGROUND-COLOR: none; COLOR: none; TEXT-DECORATION: none; TEXT-TRANSFORM: uppercase
}
</STYLE>

<SCRIPT language=JavaScript>
<!--

function gdate() {
   date=new Date()
   var day_number=date.getDay()
   var day_date=date.getDate()
   var month_number=date.getMonth()
   var year=date.getYear()
   var week_day=''
   var month=''
   if (year < 2000)
   year = year+1900
   if(month_number == 0) month='Jan'
   if(month_number == 1) month='Feb'
   if(month_number == 2) month='Mac'
   if(month_number == 3) month='Apr' 
   if(month_number == 4) month='Mei'  
   if(month_number == 5) month='Jun' 
   if(month_number == 6) month='Jul' 
   if(month_number == 7) month='Ogo' 
   if(month_number == 8) month='Sep' 
   if(month_number == 9) month='Okt' 
   if(month_number == 10) month='Nov' 
   if(month_number == 11) month='Dis' 

   if(day_number == 0) week_day='Ahad' 
   if(day_number == 1) week_day='Isnin' 
   if(day_number == 2) week_day='Selasa' 
   if(day_number == 3) week_day='Rabu' 
   if(day_number == 4) week_day='Khamis' 
   if(day_number == 5) week_day='Jumaat' 
   if(day_number == 6) week_day='Sabtu' 

  var date_to_show=week_day + ' ' + day_date + ' ' + month + ' ' + year 
   document.write('<FONT size="1"  face="Arial, Helvetica, sans-serif" color="#FFFFFF"><b>' + date_to_show + '</FONT>' )
}


//-->display_date()
 //-->display_title()
//-->


ie4 = (document.all)? true:false



function intPart(floatNum){
if (floatNum< -0.0000001){
	 return Math.ceil(floatNum-0.0000001)
	}
return Math.floor(floatNum+0.0000001)	
}
function weekDay(wdn){
					if(wdn==0) 
						return "Isnin"
						 
					if(wdn==1) 
						return "Selasa"
						 
					if(wdn==2) 
						return "Rabu"
						 
					if(wdn==3) 
						return "Khamis"
						 
					if(wdn==4) 
						return "Jumaat"
						 
					if(wdn==5) 
						return "Sabtu"
						 
					if(wdn==6) 
						return "Ahad"
						 
	return ""

}
function hdate() {
   date=new Date()
   var d=date.getDay()
   var m=date.getMonth()
   var y=date.getYear()
   if (y < 2000)
      y=y+1900;
 	if ((y>1582)||((y==1582)&&(m>10))||((y==1582)&&(m==10)&&(d>14))) 
	{
		jd=intPart((1461*(y+4800+intPart((m-14)/12)))/4)+intPart((367*(m-2-12*(intPart((m-14)/12))))/12)-
	     intPart( (3* (intPart(  (y+4900+    intPart( (m-14)/12)     )/100)    )   ) /4)+d-32075
	}
	else
	{
		jd = 367*y-intPart((7*(y+5001+intPart((m-9)/7)))/4)+intPart((275*m)/9)+d+1729777
	}
	l=jd-1948440+10632
	n=intPart((l-1)/10631)
	l=l-10631*n+354
	j=(intPart((10985-l)/5316))*(intPart((50*l)/17719))+(intPart(l/5670))*(intPart((43*l)/15238))
	l=l-(intPart((30-j)/15))*(intPart((17719*j)/50))-(intPart(j/16))*(intPart((15238*j)/43))+29
	m=intPart((24*l)/709)
	d=l-intPart((709*m)/24)
	y=30*n+j-30
	m++
	if(m == 1) month='MUHARAM' 
   if(m == 2) month='SAFAR' 
   if(m == 3) month='RABIUL AWAL' 
   if(m == 4) month='RABIUL AKHIR' 
   if(m == 5) month='JUMADI AWAL'  
   if(m == 6) month='JUMADAI AKHIR' 
   if(m == 7) month='REJAB' 
   if(m == 8) month='SYABAN' 
   if(m == 9) month='RAMADHAN' 
   if(m == 10) month='SYAWAL' 
   if(m == 11) month='ZULKAEDAH' 
   if(m == 12) month='ZULHIJAH' 
   datetoshow="("+d + " " + month + " " + y +"H)"
   document.write('<font size="1"  face="Arabic Transparent" color="#FFFFFF">' + datetoshow + '</FONT>')			
}

//-->
<!-- HIDE
if (navigator.appVersion.indexOf("2.") != -1){
        check = false;
        }
if ((navigator.appVersion.indexOf("3.") != -1) && (navigator.appName.indexOf("Explorer") != -1)){
        check = false;
        }
else {
        check = true;
        }

if (check == true){
        
        image8= new Image();
        image8.src = "images/idbmaster.gif";
        image8on = new Image();
        image8on.src = "images/idbmasteron.gif";

        image9= new Image();
        image9.src = "images/englishmaster.gif";
        image9on = new Image();
        image9on.src = "images/englishmasteron.gif";

        }

function imageon(name)   {
        document[name].src = eval(name + "on.src");
}
function imageoff(name)  {
        document[name].src = eval(name + ".src");
}

function on(name)  {
        if (check == true){
                imageon(name);
        }
}
function off(name)  {
        if (check == true){
                imageoff(name);
        }
}

function openSiteMap() {
        var sitemap = open("sitemap/siteindex.htm", "SiteMap", "width=250,height=400,scrollbars=auto,status=yes");
}

// STOP HIDING -->
//-->
</SCRIPT>

<?php
function wksolat() 
{
	if(!($myFile1 = fopen("waktusolat.txt", "r")))
    //if(!($myFile = fopen("haribu~1.txt", "r")))

	{
		echo"Error:";
		echo"$filename could not be read\n";
		exit;
	}
    $i=0;
    while(!feof($myFile1))
	{
		//read a line from the file
		$myLine1 = fgets($myFile1, 255);
		$j=0;
		for($token = strtok($myLine1, " \n\t\r");$token != "";$token = strtok(" \n\t\r"))
		{    $dt1[$j++]=$token;}
		 $infows[$dt1[0]."a".$dt1[1]][0]=$dt1[2];
		 $infows[$dt1[0]."a".$dt1[1]][1]=$dt1[3];
		 $infows[$dt1[0]."a".$dt1[1]][2]=$dt1[4];
		 $infows[$dt1[0]."a".$dt1[1]][3]=$dt1[5];
		 $infows[$dt1[0]."a".$dt1[1]][4]=$dt1[6];
		 $infows[$dt1[0]."a".$dt1[1]][5]=$dt1[7];
		 $infows[$dt1[0]."a".$dt1[1]][6]=$dt1[8];

//		 echo"dt1[2]   <br>";
	//close the file
	}
	$tt=localtime();
	$ts1=$tt[0];
	$ts2=$tt[1];
	$ts3=$tt[2];
	   $date=getdate();
   $d="a".$date['mday'];
   $m=$date['mon'];
   $y=$date['year'];
	$s="112";
    echo"<FONT size=\"2\"  face=\"Arial, Helvetica, sans-serif\" color=\"#FFFFFF\"><b>";
	echo" (Shah Alam) Subuh {$infows[$m.$d][1]}  Syuruk {$infows[$m.$d][2]}  Zohor {$infows[$m.$d][3]}  Asar {$infows[$m.$d][4]}  Maghrib {$infows[$m.$d][5]}  Isyak {$infows[$m.$d][6]}<br>";
	echo"</FONT>";
	fclose($myFile1);
}

function intPart($floatNum){
if ($floatNum< -0.00000001){
	 return (ceil($floatNum-0.00000001));
	}
return (floor($floatNum+0.00000001));	
}
function hjdate() {
	if(!($myFile = fopen("haribulan.txt", "r")))
    //if(!($myFile = fopen("haribu~1.txt", "r")))

	{
		echo"Error:";
		echo"$filename could not be read\n";
		exit;
	}
    $i=0;
    while(!feof($myFile))
	{
		//read a line from the file
		$myLine = fgets($myFile, 255);
		$j=0;
		for($token = strtok($myLine, " \n\t\r");$token != "";$token = strtok(" \n\t\r"))
		{    $dt[$j++]=$token;}
		 $infodate[$dt[0]]=$dt[1];
	//close the file
	}
	fclose($myFile);
   $date=getdate();
   $d=$date['mday'];
   $m=$date['mon'];
   $y=$date['year'];

//    echo"$d   $m   $y<br>";
//   $jd = 367*$y-intPart((7*($y+5001+intPart(($m-9)/7)))/4)+intPart((275*$m)/9)+$d+1729777;
	$jd=intPart((1461*($y+4800+intPart(($m-14)/12)))/4)+intPart((367*($m-2-12*(intPart(($m-14)/12))))/12)-
	     intPart( (3* (intPart(  ($y+4900+    intPart( ($m-14)/12)     )/100)    )   ) /4)+$d-32075;
	$l=$jd-1948440+10632;
	$n=intPart(($l-1)/10631);
	$l=$l-10631*$n+354;
	$j=(intPart((10985-$l)/5316))*(intPart((50*$l)/17719))+(intPart($l/5670))*(intPart((43*$l)/15238));
	$l=$l-(intPart((30-$j)/15))*(intPart((17719*$j)/50))-(intPart($j/16))*(intPart((15238*$j)/43))+29;
	$m=intPart((24*$l)/709);

	$d=$l-intPart((709*$m)/24);

///	echo"l = $l and m = $m  d = $d<br>";
	$y=30*$n+$j-30;
   	if($m < 10) $m = "0".$m;
	if($d < 10) $d = "0".$d;
//	echo"$d   $m   $y<br>";
	$dm=$d.$m.$y;
//	$dm=$infodate[$dm];
//	echo"$dm<br>";
	$m=substr($dm,2,2);
	$d=substr($dm,0,2);
	if (substr($d,0,1)=="0") $d=substr($d,1,1);
	if($m == "01"){$month='MUHARAM';}
   if($m == "02"){$month='SAFAR';}
   if($m == "03"){$month='RABIUL AWAL';}
   if($m == "04"){$month='RABIUL AKHIR';}
   if($m == "05"){$month='JUMADI AWAL';} 
   if($m == "06"){$month='JUMADAI AKHIR';}
   if($m == "07"){$month='REJAB';}
   if($m == "08"){$month='SYABAN';}
   if($m == "09"){$month='RAMADHAN';}
   if($m == "10"){$month='SYAWAL';}
   if($m == "11"){$month='ZULKAEDAH';}
   if($m == "12"){$month='ZULHIJAH';}
   echo"$d   $m   $y<br>";
   $datetoshow="<FONT size=\"1\"  face=\"Arial, Helvetica, sans-serif\" color=\"#FFFFFF\"><b>".$d . " " . $month . " " . $y ."H"."</FONT>";
   echo"$datetoshow";
}

?>
	
<META content="Microsoft FrontPage 5.0" name=GENERATOR></HEAD>
<BODY leftMargin=0 text=#000000 topMargin=0 MARGINHEIGHT="0" MARGINWIDTH="0">
<TABLE align=center border=0 borderColor=#009933 cellPadding=0 cellSpacing=0 
height=561 width="100%" hspace="0" vspace="0">
  <TBODY>
    <TR> 
      <TD align=left vAlign=top width="100%" height="561"> <DIV align=right> 
          <TABLE background= index_files/backgh.jpeg border=0 cellPadding=0 cellSpacing=0 width="100%">
            <TBODY>
              <TR colspan=4> 
                <TD width="30%" height="99">
				<DIV align=left><img height=100 src=" index_files/logouitm.jpg" vspace=3 hspace=5 width=300></DIV>
				</TD>
				<TD width="40%" height="99">
				<DIV align=center><img height=92 src=" index_files/BAN4.gif" width=550><br> </DIV>
				</TD>
				<TD width="30%" height="99">
				<DIV align=right><img height=100 src=" index_files/logofskm.jpg" vspace=3 hspace=5 width=400></DIV> 
				</TD>
				</TR>
				</TD>
              </TR>
             </TBODY>            </TABLE>
          
        <TABLE border=0 borderColor=#336633 cellPadding=0 cellSpacing=0 height=540 width="100%" hspace="0" vspace="0">
		<TBODY>
          <TR vAlign=top> 
            <TD align=left background=index_files/bgrd5b.JPG bgColor=#ffffff borderColor=#ffcc99 height=551> 
			<TABLE border=0 borderColor=#107018 cellPadding=0 cellSpacing=0 width="100%">
                <TBODY>
                  <TR borderColor=#ffffff> 
                    <TD colSpan=3 vAlign=top> 
					   <TABLE bgColor=#12831b border=0 cellPadding=0 cellSpacing=0 width="100%">
                          <TR vAlign=top> 
                            <TD vAlign=center width="22%"> 
							    <DIV align=left > <script>gdate()</script></DIV>
                            </TD>
							<TD vAlign=center width="56%"> 
							    <DIV align=center > <?php wksolat();?></DIV>
                            </TD>
							<TD vAlign=center width="22%"> 
                                <DIV align=right > <?php hjdate();?></DIV>
							</TD>
						  </TR>
                        </TABLE>
                  <TR borderColor=#ffffff> 
                    <TD colSpan=3 height=15 vAlign=top> <DIV align=center> 
                        <TABLE border=0 width="515">
                          <TBODY>
                            <TR> 
                                  <TD width="464" height="90" colSpan=2> 
                                    <DIV align="center"><IMG height=40 src=" index_files/bis.gif" width=285> </DIV>
                                    <DIV align=center><FONT color=#000066><STRONG><EM>Dengan                                     Nama Allah Yang Maha Pemurah Lagi Maha Pengasihani</EM></STRONG></FONT></DIV>
								  </TD>
                            </TR>
                          </TBODY>
                        </TABLE>
                     </TD>
                  </TR>
				 </TD>
               </TR>
             </TBODY>
           </TABLE> 
			  
			  
			  
              <TABLE border=0 cellPadding=0 cellSpacing=0 width="100%">
			  <TBODY>
                <TR> 
				  <TD align=left background= index_files/bgrd5b.JPG bgColor=#298618  width="12%">&nbsp;
				  </TD>
                  <TD bgColor=#298618 width="71%"> 
				   <div align="center"><STRONG><FONT color=#ffffff></FONT></STRONG></div>
				  </TD>
                  <TD align=right background= index_files/bgrd5b.JPG bgColor=#298618 width="14%">&nbsp;
				  </TD>
                </TR>
                <TABLE border=0 cellPadding=6 height=104 width="86%">
                <TR> 
                   <TD background= index_files/bgrd5b.JPG bgColor=#ffffff height=40 width="14%">
				    </TD>
                        <TD bgColor=#f2eedd width="86%"> 
						   <TABLE border=0 width="100%">
                              <TR> 
                                <TD colSpan=6> 
                                   <DIV align=center> 
                                   <FONT color=#006633><FONT size=3><STRONG>Pilih 
                                      Koleksi Hadis</STRONG></FONT></FONT>
                                    <FONT color=#006633><FONT size=3><STRONG><EM> 
                                      (Boleh Pilih Lebih Dari Satu Koleksi)</EM></STRONG></FONT></FONT></DIV>
								</TD>
                              </TR>
							  <TR> 

							    <TD width="16.6%"  height="40"  align="center"> 
							     <IMG name="imageField" type="image" src="index_files/bukhari1.jpg" width="80" height="105" border="0"> </TD>
                                <TD width="16.6%"  height="40"  align="center"> 
							     <IMG name="imageField" type="image" src="index_files/muslim1.jpg" width="80" height="105" border="0"> </TD>
							     <TD width="16.6%"  height="40"  align="center"> 
								 <IMG name="imageField" type="image" src="index_files/termizi1.JPG" width="80" height="105" border="0"> </TD>
							    <TD width="16.6%"  height="40"  align="center"> 
							     <IMG name="imageField" type="image" src="index_files/nasai1.jpg" width="80" height="105" border="0"> </TD>
                                <TD width="16.6%"  height="40"  align="center"> 
							     <IMG name="imageField" type="image" src="index_files/majjah1.jpg" width="80" height="105" border="0"> </TD>
								 <TD width="16.6%" height="40" align="center"> 
							     <IMG name="imageField" type="image" src="index_files/daud1.JPG" width="80" height="105" border="0"> </TD>
                               </TR>
							<TR>
                            <TD width="16.6%" height="20" align="center"> 
							<p><FONT color=#CC00CC><FONT size=2><STRONG>2028 Hadis</STRONG></FONT></FONT></TD>
							 <TD width="16.6%" height="20" align="center"> 
							 <p><FONT color=#CC00CC><FONT size=2><STRONG>2521 Hadis</STRONG></FONT></FONT></TD>
                            <TD width="16.6%" height="20" align="center"> 
							<p><FONT color=#CC00CC><FONT size=2><STRONG>4179 Hadis</STRONG></FONT></FONT></TD>
                            <TD width="16.6%" height="20" height="20" align="center"> 
							<p><FONT color=#CC00CC><FONT size=2><STRONG>5700 Hadis</STRONG></FONT></FONT></TD>
							 <TD width="16.6%" height="20" align="center"> 
							 <p><FONT color=#CC00CC><FONT size=2><STRONG>4340 Hadis</STRONG></FONT></FONT></TD>
                            <TD width="16.6%" height="20" align="center"> 
							<p><FONT color=#CC00CC><FONT size=2><STRONG>1002 Hadis</STRONG></FONT></FONT></TD>
                            </TR>
                            <TR> 
							  <form action="dapatQH.php" method="get" target="_blank">
                              <TD width="16.6%" height="20" align="center"> 
							  <input name="bukhari" type="checkbox" value="1"  checked> </TD>
                              <TD width="16.6%" height="20"  align="center"> 
							  <input name="muslim" type="checkbox" value="1" > </TD>
							  <TD width="16.6%" height="20"  align="center">
							  <input name="termizi" type="checkbox" value="1"> </TD>
                              <TD width="16.6%" height="20" align="center"> 
							  <input name="nasai" type="checkbox" value="1" > </TD>
                              <TD width="16.6%" height="20"  align="center"> 
							  <input name="majjah" type="checkbox" value="1"> </TD>
							  <TD width="16.6%" height="20"  align="center">
							  <input name="daud" type="checkbox" value="1"> </TD>

 							  <input name="mula" type="hidden" value="0">
							  <input name="pmula" type="hidden" value="1">							 
							 
                            </TR>
							<TR>
							<TD colSpan=2 width="35%" height="20" align="center"></TD>
                            <TD colSpan=1 width="15%" height="20" align="center"> 
							<p><FONT color=#CC00CC><FONT size=3><STRONG>Susun Mengikut Pelbagai Perkataan</STRONG></FONT></FONT></TD>
                            <TD colSpan=1 width="15%" align="center"> 
							<p><FONT color=#CC00CC><FONT size=3><STRONG>Tesaurus</STRONG></FONT></FONT></TD>
							<TD colSpan=2 width="35%" height="20" align="center"></TD>
                            </TR> 
							<TR> 
							  <TD colSpan=2 width="35%" height="20" align="center"></TD>
                              <TD colSpan=1 width="15%" height="20" align="center"> 
							  <input name="dan" type="checkbox" value="1" checked> </TD>
							  <TD colSpan=1  width="15%" align="center">
							  <input name="thes" type="checkbox" value="1"> 	</TD>						 
							  <TD colSpan=2 width="35%" height="20" align="center"></TD>
                            </TR> <br>                           
							   <TD height="50" colSpan=6> <DIV align=center> 
                                  <FONT color=#006633> 
                                    <b> Taipkan Pertanyaan</b><br>

                                    <input type="text" size=40 name="akar" value="">
                                    <br>
                                    <input name="go" type="submit" value="Cari">
                                    <input name="batal" type="reset" value="Padam">
									</form>
                                    </FONT>
                                </DIV></TD>
                            </TR>
                          </TABLE>
                <TR> 
                  <TD colSpan=4 background=index_files/bgrd5b.JPG> 
				  <DIV align=center><strong> 
				  <font color="#006633" size="3">
                      </a> <font color="#006633" size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;| 
                      </font> <a href="aboutus.html"><font color="#006633" size="3">&nbsp;Hubungi Kami&nbsp; 
                      </font></a> <font color="#006633" size="3">|</font></font> 
                      <a href="credit.html"><font color="#006633" size="3">&nbsp;Penghargaan&nbsp; </font></a><font color="#006633" size="3">|</font> 
                      <a href="http://www.tmsk.uitm.edu.my/"><font color="#006633" size="3">&nbsp;fskm &nbsp;
                      </font></a> <font color="#006633" size="3">|</font><a href="http://www.uitm.edu.my"><font color="#006633" size="3">&nbsp;UiTM &nbsp;
                      |</font></a></strong></DIV>
					  </TD>
					  </TR>
              </TABLE>
              <TABLE width="99%" background=index_files/bgrd5b.JPG>
                <TBODY>
                  <TR> 
                    <TD> <DIV align=center><FONT face="Arial, Helvetica, sans-serif" 
                  size=1><B>©2007 Copyright. (Last upate: 15/03/2010). Web Development:<br> 
                        Normaly Kamal Ismail, Nurazzah Abdul Rahman and Zainab Abu Bakar</B></FONT></DIV></TD>
                  </TR>
                  <TR> 
                    <TD > <DIV align=center><FONT face="Arial, Helvetica, sans-serif" 
                  size=1>Universiti Teknologi Mara, MALAYSIA </FONT></DIV></TD>
                  </TR>
                  <TR> 
                    <TD> <DIV align=center><FONT face="Arial, Helvetica, sans-serif" 
                  size=1>Di buka sebanyak <?php 
$myFile1 = fopen("countsu.txt", "r");
$count=fgets($myFile1,255);
fclose($myFile1);
echo $count;
$myFile2 = fopen("countsu.txt", "w");
//$count=0;
$count++;
fwrite($myFile2,$count);
fclose($myFile2);
?> kali sejak 02/10/07</FONT></DIV></TD>
                  </TR>
				  
				  
				  
				  
                </TBODY>
              </TABLE></FORM>
              </TD>
          </TR>
        </TABLE>
        </DIV></TD>
    </TR>
  </TBODY>
</TABLE>				          
</BODY></HTML>