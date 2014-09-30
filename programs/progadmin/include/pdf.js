
Runner.Pdf=function(){this.maxwidth=0;this.maxheight=0;this.pdfbuilt=0;var selfLink=this;this.CalcMaxPage=function(){this.maxwidth=0;this.maxheight=0;var minleft=mintop=999999;if($('[name="page"]').length>0){$('[name="page"]').each(function(ind,element){if($('table[class*="runner-c-grid"]',element).length>0)
element=$('table[class*="runner-c-grid"]',element).eq(0)[0];if(element.offsetWidth>selfLink.maxwidth)
selfLink.maxwidth=element.offsetWidth;if(element.offsetHeight>selfLink.maxheight)
selfLink.maxheight=element.offsetHeight;});}
else{$('div[class^="runner-s-"]').each(function(index,element){var el=$(element).children(':eq(0)');if(el.hasClass('runner-c-pdf')||el[0]==undefined)
return;if(el[0].offsetLeft+el[0].offsetWidth>selfLink.maxwidth)
selfLink.maxwidth=el[0].offsetLeft+el[0].offsetWidth;if(el[0].offsetTop+el[0].offsetHeight>selfLink.maxheight)
selfLink.maxheight=el[0].offsetTop+el[0].offsetHeight;if(el[0].offsetLeft<minleft)
minleft=el[0].offsetLeft;if(el[0].offsetTop<mintop)
mintop=el[0].offsetTop;});}
if(!this.maxwidth)
this.maxwidth=document.body.scrollWidth;if(!this.maxheight)
this.maxheight=document.body.scrollHeight;if(mintop<999999)
this.maxheight-=mintop;if(minleft<999999)
this.maxwidth-=minleft;};this.RunPDF=function(){this.CalcMaxPage();var hasQuestionMarkInUrl=window.location.href.indexOf('?')>=0,pdiv=document.getElementById("progress"),el=document.createElement("iframe");document.body.appendChild(el);$(el).css('position','absolute');$(el).css('left','-1000px');el.src=window.location.href+(hasQuestionMarkInUrl?'&':'?')
+'pdf=1&width='+this.maxwidth+'&height='+this.maxheight+'&rndval='+Math.random();if($('.progress_bar').length==0)
this.SetContent("<p>"+Runner.lang.constants.TEXT_PDF_BUILD1
+"<br><span style=\"display:block;background:white;border:solid black 1px;width:100px;height:20px;\"><span class=progress_bar style=\"display:block;background:#6080FF;width:1px;height:100%\"></span></span><br><span class=progress_percent></span>% "
+Runner.lang.constants.TEXT_PDF_BUILD2+"</p>");this.pdfbuilt=0;};this.SetProgress=function(total,progress){if(isNaN(total)||isNaN(progress))
return;var count=Math.floor(progress*100/total);if(count>100)
count=100;$('.progress_bar').css('width',""+count+"px");$('.progress_percent').html(""+count);}
this.SetContent=function(content){if($('[class*="printpdf"]').length)
$('[class*="printpdf"]').html(content);if($('[class*="viewpdf"]').length)
$('[class*="viewpdf"]').html(content);}
if($('.pdflink').length>0)
$('.pdflink').click(function(){selfLink.RunPDF();return false;});};Runner.Pdf=new Runner.Pdf();