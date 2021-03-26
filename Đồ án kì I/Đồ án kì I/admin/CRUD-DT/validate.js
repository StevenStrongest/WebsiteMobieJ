//Input filed
const ten_dt = document.getElementById('ten_dt');
const gia_sp = document.getElementById('gia_goc');
const gia_khuyen_mai = document.getElementById('gia_khuyen_mai');
const danh_muc = document.getElementById('danh_muc');

//Form
const form = document.getElementById('them_dt');
// Validation color
const green = '#4CAF50';
const red = '#F44336';

//Handel Form(Xử lý gửi dữ liệu)
form.addEventListener('submit', function(event){
//Prevent default behaviour (Ngăn chặn gửi dữ liệu khi giá trị trả về sai)
if(validate_ten_dt() && validate_gia_sp() ){
	const name = ten_dt.value;
	const container = document.querySelector('div.reload');
}

if(ten_dt.value == ""){
	event.preventDefault();
	return false;
}

if(gia_sp.value == ""){
	event.preventDefault();
	return false;
}


if(danh_muc.value == 0){
	alert('Bạn chưa chọn danh mục');
	event.preventDefault();
	return false;
}


});

function validate_ten_dt(){
	//Check if is empty (Kiểm tra nếu trống)
	if(checkIfEmpty(ten_dt)) {
		document.getElementById('ten_dt').focus();
		return;
	};
	//Is if has only letters
	return true;
}

function validate_gia_sp(){
	//Check if is empty (Kiểm tra nếu trống)
	if(checkIfEmpty_gia(gia_goc)){
		document.getElementById('gia_goc').focus();
		return;
	};


	if(Checkval(gia_goc)){
		document.getElementById('gia_goc').focus();
		return;
	}
	//Is if has only letters
	return true;
}

function checkIfEmpty(field){
 if(isEmpty(field.value.trim())){
 	//Set field invalid (Xét trường không hợp lệ)
 	setInValid(field, 'Vui lòng điền thông tin');
 	return true;
 }else{
 	//Set field valid (Xét trường hợp lệ)
 	setValid(field);
 	return false;
 }
}

function checkIfEmpty_gia(field){
 if(isEmpty(field.value.trim())){
 	//Set field invalid (Xét trường không hợp lệ)
 	setInValid(field, 'Vui lòng điền giá sản phẩm');
 	return true;
 }else{
 	//Set field valid (Xét trường hợp lệ)
 	setValid(field);
 	return false;
 }
}


function isEmpty(value){
	if(value === '') return true;
	return false;
}

function setInValid(field, message){
	field.className = 'Invalid';
	field.nextElementSibling.innerHTML = message;
	field.nextElementSibling.style.color = red;
}

function setValid(field){
	field.className = 'valid';
	field.nextElementSibling.innerHTML = '';
	//field.nextElementSibling.style.color = red;
}

