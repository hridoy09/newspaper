$(document).ready(function(){$("#sidebar").mCustomScrollbar({theme:"minimal"});$('#dismiss, .overlay').on('click',function(){$('#sidebar').removeClass('active');$('.overlay').removeClass('active');});$('#sidebarCollapse').on('click',function(){$('#sidebar').addClass('active');$('.overlay').addClass('active');$('.collapse.in').toggleClass('in');$('a[aria-expanded=true]').attr('aria-expanded','false');});});$('.clickSubscribe').click(function(){$('#sticky-subscriber-div').show(1000);$('.clickSubscribe').toggle(1000);});$('.sticky-subscriber-close').click(function(){$('#sticky-subscriber-div').hide(1000);$('.clickSubscribe').toggle(1000);});$('.subscribeEmail').click(function(){var email=$('.registerEmail').val();var site_url=$('.site_url').val();var url=site_url+'/subscribe/email/'+email;$.get(url,function(data){$('#success-subscription').empty();$('#success-subscription').html('<p style="margin-bottom: 0px;font-size: 20px;line-height: 21px;color: white">'+data+'</p>');setInterval(function(){$('#sticky-subscriber-div').hide(1000);},3000);});});$(window).scroll(function(){var scroll=$(window).scrollTop();if(scroll>=80){$(".navbar").addClass("headerBoxShadow");}
if(scroll<80){$(".navbar").removeClass("headerBoxShadow");}});$(document).ready(function(){$('.rel-soci').hover(function(){$(this).find('.rel-soci-con').show();},function(){$(this).find('.rel-soci-con').hide();});});$(document).ready(function(){$('img').loadScroll();});$('.form_submit').click(function(){$('#samakal-search').submit();});$('#tp-search input').datepicker({format:'yyyy-mm-dd',});$('#online-search input').datepicker({format:'yyyy-mm-dd',});$(window).load(function(e){$("#sBreakingNews").breakingNews({effect:"slide-h",autoplay:true,timer:3000,color:"red"});});var width=$(window).width();if(width>768){$('.visible-xs').remove();}
if(width<768){$('.hidden-xs').remove();}
$(function(){$(window).scroll(function(){if($(this).scrollTop()>100){$('.bottomStickyDesktopDiv').show();}else{$('.bottomStickyDesktopDiv').hide();}});});$('.bottomStickyDesktopDivClose').click(function(){$('.bottomStickyDesktopDiv').hide();$('.bottomStickyDesktopDiv').removeClass('bottomStickyDesktopDiv');});