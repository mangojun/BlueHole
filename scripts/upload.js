var singleWidget = uploadcare.SingleWidget("[role=uploadcare-uploader]");

singleWidget.onUploadComplete(function(info){
    document.getElementById("description").value = document.getElementById("description").value + '<img src="' + info.cdnUrl + '">';
});