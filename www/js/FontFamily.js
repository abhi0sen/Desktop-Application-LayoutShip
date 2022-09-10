  // changing the font family of the content -->
  
  function fontFamily(){
    var font = document.getElementById("font");
    var layout = document.getElementById("layout");
    // $("#layout").css({"font-family": font.value});
  
    $(document).on('change', '#font', function(e) {
      var sel, range;
      if (window.getSelection) {
        sel = window.getSelection();
        if (sel.rangeCount) {
          var replace_text = sel.toString();
          range = sel.getRangeAt(0);
          range.deleteContents();
          var node = document.createElement('span');
          node.style = "font-family:"+font.value;
          node.innerHTML = replace_text;
          range.insertNode(node);
        }
      } else if (document.selection && document.selection.createRange) {
        range = document.selection.createRange();
        console.log(range.text);
      }
    });
  } 