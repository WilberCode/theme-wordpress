"use strict";function stickyStop(){window.pageYOffset>sticky?rootStyles.setProperty("--header-height",space):rootStyles.setProperty("--header-height",spaceDefault)}edgrid.menu("nav","menu");var d=document;window.onscroll=function(){stickyStop()};for(var space="1.5rem",spaceDefault="3.5rem",navbar=d.getElementById("header-container"),rootStyles=d.documentElement.style,sticky=navbar.offsetTop,accordion=d.querySelectorAll(".questions__btn"),i=0;i<accordion.length;i++){accordion[i].classList.add("plus"),accordion[0].classList.remove("plus"),accordion[0].classList.add("less"),accordion[0].classList.add("questions--active");var activeFirst=accordion[0].nextElementSibling;activeFirst.style.maxHeight=activeFirst.scrollHeight+"px",accordion[i].addEventListener("click",function(){this.classList.toggle("questions--active"),this.classList.toggle("less"),this.classList.toggle("plus");var t=this.nextElementSibling;t.style.maxHeight?t.style.maxHeight=null:t.style.maxHeight=t.scrollHeight+"px"})}