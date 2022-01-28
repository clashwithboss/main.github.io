function doGet(e) {
  var x = HtmlService.createTemplateFromFile("index2");
  var y = x.evaluate();
  var z = y.setXFrameOptionsMode(HtmlService.XFrameOptionsMode.ALLOWALL);
  return z;
}

function getSheetData()  { 
  var a= SpreadsheetApp.getActiveSpreadsheet();
  var b = a.getSheetByName('Clan distribution'); 
  var c = b.getDataRange();
  return c.getValues();  
}