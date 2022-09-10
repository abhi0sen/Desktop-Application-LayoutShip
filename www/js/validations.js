// toggling the list of saved and sample content
$(document).ready(function () {
  $("#sample").click(function () {
    $("#samp-list").toggle();
  });
  $("#saved").click(function () {
    $("#save-list").toggle();
  });
});

// transferring html of div into input feild so that database entry gets possible
function dataTransfer() {
  // var a = document.getElementById("rich").innerHTML;
  var iframe =  document.getElementById('rich');
  var iFrameBody= iframe.contentDocument || iframe.contentWindow.document;
  content= iFrameBody.getElementsByTagName('body')[0].innerHTML;

  var b = document.getElementById("hidden_text");
  b.value = content;

  // var Header = b.value;
  // console.log(b.value);
}

// getting letters of sentence.
function Header() {
  var header = document.getElementById("header");
  var iframe =  document.getElementById('rich');
  var iFrameBody= iframe.contentDocument || iframe.contentWindow.document;
  content= iFrameBody.getElementsByTagName('body')[0];
  var a = $(content).text().split(' ')[0];
  header.value = a;
}

// making the default text style for the blank layout
function cursorStyle() {
  var size = document.getElementById("size");
  var font = document.getElementById("font");
  var layout = document.getElementById("layout");
  $("#layout").css({ "font-size": size.value + "pt" });
  // $("#layout").css({ "font-family": font.value });
  layout.style.fontFamily = font.value;
}


// changing the text into bold text -->
// function bold() {
//   const click = document.querySelector('#bold');
//   click.addEventListener('click', () => {
//     document.execCommand('bold')
//   });

// }

// changing the text into underlined text -->
// function underline() {
//   var click = document.getElementById('line');
//   click.addEventListener('click', () => {
//     document.execCommand('underline')
//   });
// }

// changing the text into italic text -->
// function italic() {
//   var click = document.getElementById('italic');
//   click.addEventListener('click', () => {
//     document.execCommand('italic')
//   });
// }

// Copying the content -->

$(function () {
  $("#copy").click(function (e) {
    e.preventDefault();

    let emailBodyText = "";
    var iframe =  document.getElementById('rich');
    var iFrameBody= iframe.contentDocument || iframe.contentWindow.document;
    content= iFrameBody.getElementsByTagName('body')[0].innerHTML;
    // console.log("layout");
    emailBodyText = emailBodyText + content;
    // alert(emailBodyText);
    const el = document.createElement('div');
    el.innerHTML = emailBodyText;
    el.style.position = 'absolute';
    // el.style.left = '-9999px';
    document.body.appendChild(el);
    const sel = getSelection();
    sel.setBaseAndExtent(el, 0, el, el.childNodes.length);
    document.execCommand('copy');
    document.body.removeChild(el);
  });
});

// New layout -->
function addLayout(para) {
  $("#layout").hide();
  const newD = document.createElement("div");
  const newCont = document.createTextNode(para);
  newD.appendChild(newCont);
  const curDiv = document.getElementById("file");
  const nodeList = document.querySelectorAll("#layout");
  for (i = 0; i < nodeList.length; i++) {
    nodeList[i].style.display = "none";
  }
  curDiv.appendChild(newD);
  // curDiv.replaceChild(newD, curDiv.childNodes)
  newD.setAttribute('id', 'layout');
  newD.setAttribute('class', 'height border border-2 overflow-auto');
  newD.id = 'layout';
  newD.contentEditable = "true";
}

// New button -->
function addElement(para) {
  const newDiv = document.createElement("button");
  const newContent = document.createTextNode("New Layout");
  newDiv.appendChild(newContent);
  const currentDiv = document.getElementById("files");
  newDiv.setAttribute('id', 'btn-file bt-dark');
  currentDiv.appendChild(newDiv);
  addLayout(para);
}

// highlighting the current file header -->
$(document).ready(function () {
  $("#save").hide();
    $('#font').prop('disabled', true);
    $('#size').prop('disabled', true);


  // $("#btn-file").click(function () {
  //   $(this).css({ "background-color": "black" });
  // });
  
  $("#clear").click(function () {
    var iframe =  document.getElementById('rich');
    var iFrameBody= iframe.contentDocument || iframe.contentWindow.document;
    content= iFrameBody.getElementsByTagName('body')[0];
    content.innerHTML = "";
    $("#save").show();
    $('#font').prop('disabled', false);
    $('#size').prop('disabled', false);
  });

});

$(document).ready(function () {
  var size = document.getElementById("size");
  $("#btn-file").click(function () {
    $(this).css({ "background-color": "black", "color":"white" });
  });
});

function enableEditMode() {
  richTextField.document.designMode = "on";
}
function Edit(command) {
  richTextField.document.execCommand(command, false, null);
}
function execVal(command, value) {
  richTextField.document.execCommand(command, false, value);
}

function hideIt(param) {
  alert(param);
  if (param == "1") {
    $("#save").hide();
    // alert(param);
  }
}

// document.getElementById("myFrame").contentDocument.addEventListener(...);

// var iframes = document.querySelector('#rich');
// for (var i = 0; i < iframes.length; i++) {
  // iframes.parentNode.removeChild(iframes);
// }

// function ClipBoard() {
//   // var layout = richTextField.window.document.getElementById("layou");
//   var selButtom = document.getElementById('copy'); //store the button value in a variable
// var frame = window.document.getElementById('layout'); // store iframe in variable

// selButtom.addEventListener("click", function(){
//     var frameContent = frame.contentDocument; // get content of iframe
//     frameContent.execCommand('selectAll'); // execute select command
// },false);
// }


function fontSize (){
  var size = document.getElementById("size");
$(document).on('change', '#size', function(e) {
  var iframe = document.getElementById('rich');
var idoc = iframe.contentDocument || iframe.contentWindow.document;

idoc.getSelection()
  var sel, range;
  if (idoc.getSelection) {
    sel = idoc.getSelection();
    if (sel.rangeCount) {
      var replace_text = sel.toString();
      range = sel.getRangeAt(0);
      range.deleteContents();
      var node = document.createElement('span');
      node.style = "font-size:"+size.value+"pt";
      node.innerHTML = replace_text;
      range.insertNode(node);
    }
  } else if (document.selection && document.selection.createRange) {
    range = document.selection.createRange();
    console.log(range.text);
  }
});
}