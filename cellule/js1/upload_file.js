;



var elem='';
const fileTempl = document.getElementById("file-template"),
imageTempl = document.getElementById("image-template"),
empty = document.getElementById("empty");

// use to store pre selected files
let FILES = {};

// check if file is of type image and prepend the initialied
// template to the target element
function addFile(target, file) {
const isImage = file.type.match("image.*"),
  objectURL = URL.createObjectURL(file);
const clone = isImage
  ? imageTempl.content.cloneNode(true)
  : fileTempl.content.cloneNode(true);

clone.querySelector("h1").textContent = file.name;
clone.querySelector("li").id = file.name;
elem=file.name;
$("li#"+elem).css('display','none');//On cache d'abord la capture créée
clone.querySelector(".delete").dataset.target = objectURL;
clone.querySelector(".size").textContent =
  file.size > 1024
    ? file.size > 1048576
      ? Math.round(file.size / 1048576) + "mb"
      : Math.round(file.size / 1024) + "kb"
    : file.size + "b";

isImage &&
  Object.assign(clone.querySelector("img"), {
    src: objectURL,
    alt: file.name
  });

empty.classList.add("hidden");
target.append(clone);
//$('#gallery li:Last-child').css('display','none');
FILES[objectURL] = file;


}

const gallery = document.getElementById("gallery"),
overlay = document.getElementById("overlay");

var compteur=0;
var array_files=new Array();
// click the hidden input of type file if the visible button is clicked
// and capture the selected files
setInterval(function(){

    var hidden = document.getElementById("input"+compteur);
    document.getElementById("button").onclick = () => hidden.click();
    hidden.onchange = (e) => {
        console.log(hidden)

        //On appelle la fonction qui construit les captures des fichiers
      for (const file of e.target.files) {
      addFile(gallery, file);
    }
    
    //hidden.classList.remove('hidden');
    //document.getElementById("button").classList.add('hidden');
    //On crée des input hidden
    //console.log($('#input'+compteur).val())
    compteur++;
    $('#uploadForm').append("              <input id='input"+compteur+"' name='fileupload"+compteur+"' type='file' multiple class=' hidden' />");
    $('#uploadForm').append("              <input id='max' name='max' type='hidden' value='"+compteur+"' />");

    };
    
},100)
// use to check if a file is being dragged
const hasFiles = ({ dataTransfer: { types = [] } }) =>
types.indexOf("Files") > -1;

// use to drag dragenter and dragleave events.
// this is to know if the outermost parent is dragged over
// without issues due to drag events on its children
let counter = 0;

// reset counter and append file to gallery when file is dropped
function dropHandler(ev) {
ev.preventDefault();
for (const file of ev.dataTransfer.files) {
  addFile(gallery, file);
  overlay.classList.remove("draggedover");
  counter = 0;
}
}

// only react to actual files being dragged
function dragEnterHandler(e) {
e.preventDefault();
if (!hasFiles(e)) {
  return;
}
++counter && overlay.classList.add("draggedover");
}

function dragLeaveHandler(e) {
1 > --counter && overlay.classList.remove("draggedover");
}

function dragOverHandler(e) {
if (hasFiles(e)) {
  e.preventDefault();
}
}

// event delegation to caputre delete events
// fron the waste buckets in the file preview cards
gallery.onclick = ({ target }) => {
if (target.classList.contains("delete")) {
  const ou = target.dataset.target;
  document.getElementById(ou).remove(ou);
  gallery.children.length === 1 && empty.classList.remove("hidden");
  delete FILES[ou];
}
};






/*
function previewFile() {
    $('#gallery').append('<li></li>');
     $('#gallery').children('li').append('<img>');
     var preview = document.querySelector('img');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();
  
    reader.addEventListener("load", function () {
      preview.src = reader.result;
    }, false);
  
    if (file) {
      reader.readAsDataURL(file);
    }
  }
*/