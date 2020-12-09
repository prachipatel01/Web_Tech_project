
//switching tabs

var profile_tab=document.getElementsByClassName("profile-tab")[0];
var document_tab=document.getElementsByClassName("document-tab")[0];
var gallery_tab=document.getElementsByClassName("gallery-tab")[0];

var profile=document.getElementsByClassName("profile")[0];
var doc=document.getElementsByClassName("document")[0];
var gallery=document.getElementsByClassName("gallery")[0];

var profile_tab_li=document.getElementsByClassName("profile-tab-li")[0];
var document_tab_li=document.getElementsByClassName("document-tab-li")[0];
var gallery_tab_li=document.getElementsByClassName("gallery-tab-li")[0];

var tab="profile_tab";

function switch_to_profile() {
    document_tab.className="nav-link disabled document-tab";
    doc.style.display="none";
    gallery_tab.className="nav-link disabled gallery-tab";
    gallery.style.display="none";
    profile_tab.className="nav-link active profile-tab";
    profile.style.display="";
    tab="profile_tab";
}
function switch_to_document() {
    profile_tab.className="nav-link disabled profile-tab";
    profile.style.display="none";
    gallery_tab.className="nav-link disabled gallery-tab";
    gallery.style.display="none";
    document_tab.className="nav-link active document-tab";
    doc.style.display="";
    tab="document_tab";
}
function switch_to_gallery() {
    document_tab.className="nav-link disabled document-tab";
    doc.style.display="none";
    profile_tab.className="nav-link disabled profile-tab";
    profile.style.display="none";
    gallery_tab.className="nav-link active gallery-tab";
    gallery.style.display="";
    tab="gallery_tab";
}

function enable_profile()
{
    document_tab.className="nav-link disabled document-tab";
    gallery_tab.className="nav-link disabled gallery-tab";
    profile_tab.className="nav-link active profile-tab";
}
function enable_document()
{
    profile_tab.className="nav-link disabled profile-tab";
    gallery_tab.className="nav-link disabled gallery-tab";
    document_tab.className="nav-link active document-tab";
}
function enable_gallery()
{
    profile_tab.className="nav-link disabled profile-tab";
    document_tab.className="nav-link disabled document-tab";
    gallery_tab.className="nav-link active gallery-tab";
}

function disable()
{
    if(tab==="profile_tab")
    {
        document_tab.className="nav-link disabled document-tab";
        gallery_tab.className="nav-link disabled gallery-tab";
        profile_tab.className="nav-link active profile-tab";
    }
    else if(tab==="document_tab")
    {
        profile_tab.className="nav-link disabled profile-tab";
        gallery_tab.className="nav-link disabled gallery-tab";
        document_tab.className="nav-link active document-tab";
    }
    else if(tab==="gallery_tab")
    {
        profile_tab.className="nav-link disabled profile-tab";
        document_tab.className="nav-link disabled document-tab";
        gallery_tab.className="nav-link active gallery-tab";
    }

}


profile_tab.addEventListener("click",switch_to_profile);
document_tab.addEventListener("click",switch_to_document);
gallery_tab.addEventListener("click",switch_to_gallery);

profile_tab_li.addEventListener("mouseover",enable_profile);
document_tab_li.addEventListener("mouseover",enable_document);
gallery_tab_li.addEventListener("mouseover",enable_gallery);

profile_tab_li.addEventListener("mouseout",disable);
document_tab_li.addEventListener("mouseout",disable);
gallery_tab_li.addEventListener("mouseout",disable);
//switching tabs

const header = document.querySelector("nav");

window.addEventListener("scroll", function(){
  let scrollPosition = window.pageYOffset;
  let scrollvalue = scrollPosition*0.9;
  
  if(scrollvalue>100){
    header.style.visibility="hidden";
  }
  else{
    header.style.visibility="visible";
  }
  //parallex2.style.transform  = 'translateY(' + scrollPosition*(-1) + 'px';

})



$(document).ready(function(){
  $("a").on('click', function(event) {

    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});