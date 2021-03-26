function review(event){
	var files = document.getElementById('img_file').files;
	$('#xem_truoc').html("<p>Xem trước</p>");
	$('.img_main .khung_chua').html('<img src="" id="ad">');
	for(i=0;i<files.length;i++){
		$('.img_main .khung_chua').html('<img src="" id=" '+ i +'"> ');

		$('.img_main .khung_chua img:eq('+i+')').attr('src', URL.createObjectURL(event.target.files[i]));
	}
}