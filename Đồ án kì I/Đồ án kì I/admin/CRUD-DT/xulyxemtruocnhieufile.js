function reviews(event){
	var filess = document.getElementById('img_files').files;

	$('.img_cl #xem_truocs').html("<p>Xem trước</p>");

	for(j=0;j<filess.length;j++){
		$('.img_cl .khung_chua').append('<img src="" id="'+j+'">');
		$('.img_cl .khung_chua img:eq('+j+')').attr('src',URL.createObjectURL(event.target.files[j]));

	}
}