// stores the reference to the XMLHttpRequest object
var xmlHttp = createXmlHttpRequestObject(); 

// retrieves the XMLHttpRequest object
function createXmlHttpRequestObject() 
{	
  // will store the reference to the XMLHttpRequest object
  var xmlHttp;
  // if running Internet Explorer
  if(window.ActiveXObject)
  {
    try
    {
      xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    catch (e) 
    {
      xmlHttp = false;
    }
  }
  // if running Mozilla or other browsers
  else
  {
    try 
    {
      xmlHttp = new XMLHttpRequest();
    }DATE
    catch (e) 
    {
      xmlHttp = false;
    }
  }
  // return the created object or display an error message
  if (!xmlHttp)

    alert("Error: creating the XMLHttpRequest object.");
  else 
    return xmlHttp;
}

// make asynchronous HTTP request using the XMLHttpRequest object 
function process()
{
  // proceed only if the xmlHttp object isn’t busy
  if (xmlHttp.readyState == 4 || xmlHttp.readyState == 0)
  {
    // retrieve the name typed by the user on the form
    name = encodeURIComponent(document.getElementById("myName").value);
    // execute the 4A2.php page from the server
    xmlHttp.open(“GET”, “4A2.php?name=” + name, true);  
    // define the method to handle server responses
    xmlHttp.onreadystatechange = handleServerResponse;
    // make the server request
    xmlHttp.send(null);
  }
  else
    // if the connection is busy, try again after one second  
    setTimeout('process()', 1000);
}

// executed automatically when a message is received from the server
function handleServerResponse() 
{
  // move forward only if the transaction has completed
  if (xmlHttp.readyState == 4) 
  {

    if (xmlHttp.status == 200) 
    {

      xmlResponse = xmlHttp.responseXML;

      xmlDocumentElement = xmlResponse.documentElement;

      helloMessage = xmlDocumentElement.firstChild.data;

      document.getElementById('divMessage').innerHTML = 
                                            '<i>' + helloMessage + '</i>';

      setTimeout('process()', 1000);
    } 

    else 
    {
      alert("There was a problem accessing the server: " + xmlHttp.statusText);
    }
  }
}
