// JavaScript Document

function GetXmlHttpObject(handler)
{
   var objXMLHttp=null
   if (window.XMLHttpRequest)
   {
       objXMLHttp=new XMLHttpRequest()
   }
   else if (window.ActiveXObject)
   {
       objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP")
   }
   return objXMLHttp
}

function stateChanged()
{
	
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtResult").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}

// Will populate data based on input
function htmlData(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("txtResult").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}


function stateChanged1()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtInst").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}

// Will populate data based on input
function htmlData1(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("txtInst").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged1;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}



function stateChanged2()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtCat").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}

// Will populate data based on input
function htmlData2(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("txtCat").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged2;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}


function stateChanged3()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtCity").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}

// Will populate data based on input
function htmlData3(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("txtCity").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged3;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}


function stateChanged4()
{
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtSurvey").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}

// Will populate data based on input
function htmlData4(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("txtSurvey").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged4;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}

// By Vinay

function stateChanged5()
{


   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
   
           document.getElementById("txtSubj1").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function htmlData5(url, qStr,qstr1)
{
   if (url.length==0)
   {
       document.getElementById("txtSubj1").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
    url=url+"?"+qStr1;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged5;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}


function stateChanged6()
{


   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
   
           document.getElementById("txtSubj2").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}
function htmlData6(url, qStr)
{
  
  if (url.length==0)
   {
       document.getElementById("txtSubj2").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged6;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
   
}


function stateChanged7()
{
	
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtCountry").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}

// Will populate data based on input
function htmlData7(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("txtCountry").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged7;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}



function stateChanged8()
{
	
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtsub").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}

// Will populate data based on input
function htmlData8(url, qStr)
{

   if (url.length==0)
   {
       document.getElementById("txtsub").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged8;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}


/*  This is for select the Course . */

function stateChanged9()
{
	
   if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   {
           document.getElementById("txtcourses").innerHTML= xmlHttp.responseText;
   }
   else {
           //alert(xmlHttp.status);
   }
}


function htmlData9(url, qStr)
{
   if (url.length==0)
   {
       document.getElementById("txtcourses").innerHTML="";
       return;
   }
   xmlHttp=GetXmlHttpObject()
   if (xmlHttp==null)
   {
       alert ("Browser does not support HTTP Request");
       return;
   }

   url=url+"?"+qStr;
   url=url+"&sid="+Math.random();
   xmlHttp.onreadystatechange=stateChanged9;
   xmlHttp.open("GET",url,true) ;
   xmlHttp.send(null);
}
