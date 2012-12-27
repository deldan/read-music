<html>
<body>

<div id="content">
In: <input type="text" name="in" id="inText"/> 
<button type="button" onclick="add()">add</button>
Test: <input type="text" name="in" id="testText"/>
<button type="button" onclick="test()">Test</button>
</div>
<div id="log">
</div>
<script>
var r=0;

var t = function (v,f){
 while (v>0)
 {
  if ((v&1) && !(f&1)) {
     return false;
  }
  v = v >> 1;
  f = f >> 1;
 }
 return true;
}

h=function(s){
    var h = 0, i, char;
    if (s.length == 0) return h;
    for (i = 0; i < s.length; i++) {
        char = s.charCodeAt(i);
        h = ((h<<5)-h)+char;
        h = h & h; // Convert to 32bit integer
    }
    return h;
};
function add() 
{
 r = r | h(document.getElementById("inText").value);
 document.getElementById("log").innerHTML+="Added "+ document.getElementById("inText").value+"<br/>";


}

function test (){
 if (t(h(document.getElementById("testText").value), r)){
  document.getElementById("log").innerHTML+="Maybe here!<br/>";
 }
 else
 { 
  document.getElementById("log").innerHTML+="Not here!<br/>";
 };
}
</script>
</body>
</html>