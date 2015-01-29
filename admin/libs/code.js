// JavaScript Document

/* ГЛАВНАЯ */
$(document).on('submit','#changePassForm',function(e){
	e.preventDefault();
	
	var oldP    = document.getElementsByName('oldPass').item(0).value,
		changeP = document.getElementsByName('changePass').item(0).value,
		submitP = document.getElementsByName('submitPass').item(0).value;
	
	$.ajax({
		type: "POST",
		url: "php/changePassword.php",
		data: {
			oldPass: oldP,
			changePass: changeP,
			submitPass: submitP
		},
		success: function(res){
			res = JSON.parse(res);
			$('.status').removeClass('error').removeClass('apply').find('li').css('display','none');
			if(res[0][0] == 'apl')
				$('.status').addClass('apply').find('li:eq(2)').css('display','');
			if(res[0][0] == 'err') {
				$('.status').addClass('error');
				if(res[0][1] == 'oldPass')
					$('.status li').eq(0).css('display','');
				if(res[0][1] == 'submitPass')
					$('.status li').eq(1).css('display','');
				if(res[1])
					$('.status li').eq(1).css('display','');
			}

		}
	});
})

/* ПРОДУКЦИЯ */
$(document).on('click','#newCat',function(){
	$(this).parent().addClass('hide');
})
$(document).on('click','#backToCatList',function(){
	$('#newCat').parent().removeClass('hide');
})
$(document).on('click','#newCatAdd',function(){
	var catName = $('#newCatName').val(),
		catId = -1;

	for(i=0;i<$('.catListBlock select option').length;i++)
		if(catId < $('.catListBlock select option').eq(i).val()*1)
			catId = $('.catListBlock select option').eq(i).val()*1;
	catId++;
	if(!catName){
		$('#newCatName').focus();
		return false;
	}
	for(i=0;i<$('#materialSelect option').length;i++)
		if(catName == $('#materialSelect option').eq(i).text()){
			alert('Категория с таким именем уже существует!');
			$('#newCatName').select();
			return false;
		}
	$('#newCatName').val('');
	$('#newCat').parent().removeClass('hide');
	$('#materialSelect option[selected]').removeAttr('selected');
	$('#materialSelect').append('<option value="' + catId + '" selected>' + catName + '</option>');
	$('#subCatName').val(catName);
	$('#newCatMess').css('display','inline-block');
	
})
$(document).on('click','.materialImgKill',function(){
	$('.materialImg').removeClass('show');
	$('#imgSrc').val('');
})
$(document).on('submit','#addProdForm',function(e){
	var errs = 0;
	$('.status').removeClass('error');
	$('.status li').css('display','none');
	if($('#imgSrc').val() == ''){
		$('.status li:eq(0)').css('display','');
		errs++;
	}
	if($('#materialSelect option').length == 0){
		$('.status li:eq(1)').css('display','');
		errs++;
	}
	if(errs > 0){
		$('.status').addClass('error');
		return false;
	}
})

/* ПОПАП */
$(document).on('click','.selectImgURLBlock',function(e){
	var $img = $(e.currentTarget).find('img'),
		src = $img.attr('src');
	if($img.hasClass('folder'))
		return false;
	$('#imgSrc').val(src);
	$('.materialImg img').attr('src',src);
	$('.materialImg').addClass('show');
	$('.popShadow').css('display','');
})

/* НОВОСТИ */
$(document).on('submit','#addNewsForm',function(e){
	var errs = 0;
	$('.status').removeClass('error');
	$('.status li').css('display','none');
	if($('#imgSrc').val() == ''){
		$('.status li:eq(0)').css('display','');
		errs++;
	}
	if(errs > 0){
		$('.status').addClass('error');
		return false;
	}
})

/* ГАЛЛЕРЕИ */
$(document).on('click','.selectGImgURLBlock',function(e){
	var $img = $(e.currentTarget).find('img'),
		src = $img.attr('src'),
		allSrc = ($('#imgSrc').val().length == 0) ? src : ($('#imgSrc').val() + ',' + src);
	if($img.hasClass('folder'))
		return false;
	if(!$(e.currentTarget).parents('.popShadow').hasClass('gallery')) {
		$('.imgConteiner').append('<div class="materialImg showAll"><img src="' + src + '" alt="image"><span class="materialImgDel" title="Удалить изображение">x</span></div>');
		$('#imgSrc').val(allSrc);
	} else {
		$('#imgTitleSrc').val(src);
		$('.galTitleImg .materialImg img').attr('src',src);
		$('.galTitleImg .materialImg').addClass('show');
		$('.popShadow').removeClass('gallery');
	}
	$('.popShadow').css('display','');
})
$(document).on('click','.materialImgDel',function(){
	var baseAllSrc = $('#imgSrc').val(),
		delSrc = $(this).prev().attr('src'),
		newAllSrc = $('#imgSrc').val().replace(delSrc+',', '').replace(','+delSrc, '').replace(delSrc, '');
	$('#imgSrc').val(newAllSrc);
	$(this).parent().remove();
})
$(document).on('submit','#addGalleryForm',function(e){
	var errs = 0;
	$('.status').removeClass('error');
	$('.status li').css('display','none');
	if($('#imgSrc').val() == ''){
		$('.status li:eq(0)').css('display','');
		errs++;
	}
	if($('#imgTitleSrc').val() == ''){
		$('.status li:eq(1)').css('display','');
		errs++;
	}
	if(errs > 0){
		$('.status').addClass('error');
		return false;
	}
})

/* КУПИТЬ */
$(document).on('submit','#addCompanyForm',function(e){
	var errs = 0;
	$('.status').removeClass('error');
	$('.status li').css('display','none');
	if($('#imgSrc').val() == ''){
		$('.status li:eq(0)').css('display','');
		errs++;
	}
	if(errs > 0){
		$('.status').addClass('error');
		return false;
	}
})




