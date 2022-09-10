  // changing the font size of the content -->

function FontSize(){
    var size = document.getElementById("size");
    // $("#layout").css({"font-size": size.value+"pt"});
$(document).on('change', '#size', function(e) {
    var sel, range;
    if (window.getSelection) {
      sel = window.getSelection();
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