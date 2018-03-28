function iFrameOn(){
	F_area.document.designMode = 'On';
}
function check(){
	//var i = prompt('Enter image location', '');
	F_area.document.execCommand('InsertInputImage',false,i);
}
function iBold(){
	F_area.document.execCommand('bold',false,null);
}
function iUnderline(){
	F_area.document.execCommand('underline',false,null);
}
function iItalic(){
	F_area.document.execCommand('italic',false,null); 
}

function iStrikethrough(){
	F_area.document.execCommand('Strikethrough',false,null); 
}
function iSuperscript(){
	F_area.document.execCommand('superscript',false,null); 
}
function iSubscript(){
	F_area.document.execCommand('subscript',false,null); 
}
function iUnorderedList(){
	F_area.document.execCommand("InsertOrderedList", false,'');
}

function Align_left(){
	F_area.document.execCommand('JustifyLeft',false,null); 
}
function Align_center(){
	F_area.document.execCommand('JustifyCenter',false,null); 
}
function Justify(){
	F_area.document.execCommand('Justify',null);
}
function Align_right(){
	F_area.document.execCommand('JustifyRight',null);
	
}
// font size
function FontZise(){
	 var fsize = document.getElementById("FZise").value;
	 F_area.document.execCommand('FontSize',false,fsize );
}
function iFontSize1(){
	F_area.document.execCommand('FontSize',false,7);
	F_area.document.execCommand('JustifyCenter',false,null);
	F_area.document.execCommand('bold',false,null);
}
function iFontSize2(){ 
	F_area.document.execCommand('FontSize',false,6);
	F_area.document.execCommand('JustifyLeft',":");
	F_area.document.execCommand('bold',false,null);
}
function iFontSize3(){
	F_area.document.execCommand('FontSize',false,5);
	F_area.document.execCommand('JustifyLeft',null);
	F_area.document.execCommand('bold',false,null);
}
function iFontSize4(){
	F_area.document.execCommand('FontSize',false,4);
	F_area.document.execCommand('JustifyLeft',null);
	F_area.document.execCommand('bold',false,null);
}
function iForeColor(){
	var color = prompt('Define a basic color or apply a hexadecimal color code for advanced colors:', 'red');
	F_area.document.execCommand('ForeColor',false,color);
}
function iHorizontalRule(){
	F_area.document.execCommand('2D-Position',false,null);
}
function iOrderedList(){
	F_area.document.execCommand("InsertUnorderedList", false,"newUL");
}
function iLink(){
	var linkURL = prompt("Enter the URL for this link:", "http://"); 
	F_area.document.execCommand("CreateLink", false, linkURL);
}
function iUnLink(){
	F_area.document.execCommand("Unlink", false, null);
}
function iImage(){
	var imgSrc = prompt('Enter image location', '');
    if(imgSrc !== null){
        F_area.document.execCommand('insertImage', false, imgSrc);
    }else{
            alert("add image");
        }
}
function iTable(){
	var itbc = prompt('Enter Video location', 'hello');
    if(itbc !== null){
        F_area.document.execCommand('InsertTable', false, itbc); 
        
    }
}
function iColor1(){
    F_area.document.execCommand("forecolor",false,'#000000');
}
function iColor2(){
    F_area.document.execCommand("forecolor",false,'#b000ff');
}
function iColor3(){
    F_area.document.execCommand("forecolor",false,'#a7664a');
}
function iColor4(){
    F_area.document.execCommand("forecolor",false,'#2f2459');
}
function iColor5(){
    F_area.document.execCommand("forecolor",false,'#005f0b');
}
function iColor6(){
    F_area.document.execCommand("forecolor",false,'#bb1d1d');
}
function iColor7(){
    F_area.document.execCommand("forecolor",false,'#ffa500');
}
function iColor8(){
    F_area.document.execCommand("forecolor",false,'#5d99ff');
}
function iColor9(){
    F_area.document.execCommand("forecolor",false,'#2f3c40');
}function iColor10(){
    F_area.document.execCommand("forecolor",false,'#2600AA');
}function iColor11(){
    F_area.document.execCommand("forecolor",false,'#f4d6cd');
}function iColor12(){
    F_area.document.execCommand("forecolor",false,'#FFFFFF');
}

function iBackcolor(){
    var color = prompt("Enter a color","");
    F_area.document.execCommand("backcolor",false,color);
}

function highlight(){
    var h_ligt = prompt("Enter a color","");
    F_area.document.execCommand("backcolor",false,h_ligt);
}
function iVideo(){
    var vid= prompt("Inter your video","https://");
    F_area.document.execCommand("video",false,vid);
}

/*// Start font Style
function font_style(font){
document.getElementById("F_area").style.fontFamily = font.value;
}*/

function symbole(){
	var ff = '<div id="ff" style="height:auto; width:20px;"></div>';
	F_area.document.execCommand("div",false,vid);
}
// End of font Style

function stopUpload(success,uploadedFile){
    var result = '';
    if (success == 1){
        //Uploaded file preview
        var embed = document.getElementById("UploadedFile");
        var clone = embed.cloneNode(true);
        clone.setAttribute('src',uploadedFile);
        embed.parentNode.replaceChild(clone,embed);
    }else {
	}
}

function submit_form(){
	var theForm = document.getElementById("myform");
	theForm.elements["myTextArea"].value = window.frames["F_area"].document.body.innerHTML;
	theForm.submit();
	
}

//============================
		  function closePop(){
document.getElementById('Poptb').hidden = true;	
document.getElementById('Popimg').hidden = true;
document.getElementById('Popvid').hidden = true;	
}
		  function Showtb(){
document.getElementById('Poptb').hidden = false;	
}
function showimg(){
document.getElementById('Popimg').hidden = false;	
}
function showvid(){
document.getElementById('Popvid').hidden = false;	
}