//ambil elemen yang dibutuhkan
var keyword 	= document.getElementById('nomorkantongdarah');
var livesearch 	= document.getElementById('livesearch');

keyword.addEventListener('keyup',function()
{
	// Buat Objek Ajax
	var xhr = new XMLHttpRequest();

	// Cek Kesiapan Ajax
	xhr.onreadystatechange = function()
	{
		if (xhr.readyState == 4 && xhr.status == 200) 
		{
			livesearch.innerHTML = xhr.responseText;
		}
	} 

	// Eksekusi Ajax
	xhr.open('GET','coba.php?keyword=' + keyword.value, true);
	xhr.send();

	/*console.log(keyword.value);*/
});