function fill_gallery(path, img_cnt) {
  var divs = document.getElementsByClassName("gallery-col");
  var i, j, img, a, src;
  for (i = 1, j = 0; i <= img_cnt; i++, j = (j + 1) % divs.length) {
    src = path + "/img-" + i + ".jpg";
    img = document.createElement("IMG");
    img.setAttribute("src", src);
    a = document.createElement("A");
    a.setAttribute("class", "gallery-pic");
    a.setAttribute("href", src);
    a.appendChild(img);
    divs[j].appendChild(a);
  }
}
