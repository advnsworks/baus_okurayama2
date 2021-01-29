$(function () {
  $('.roll').each(function () {
    this.originalSrc = $(this).attr('src');
    this.rolloverSrc = this.originalSrc.replace(/(\.gif|\.jpg|\.png)$/, '_on' + "$1");
    this.rolloverImg = new Image();
    this.rolloverImg.src = this.rolloverSrc;
  }).hover(function () {
    $(this).attr('src', this.rolloverSrc);
  }, function () {
    $(this).attr('src', this.originalSrc);
  });
});
