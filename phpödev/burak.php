

<form action="kontrol.php" method="post">
	<table cellpadding="5" cellspacing="5">
       <tr>
       	<td>Ad:</td>
       	<td><input type="text" name="ad"></td>
       </tr>

           <tr>
       	<td>Soyad:</td>
       	<td><input type="text" name="sad"></td>
       </tr>

           <tr>
       	<td>Cinsiyet:</td>
       	<td>
       		<input type="radio" name="cns" value="Erkek">Erkek

       		<input type="radio" name="cns" value="Kadın">Kadın
       </td>
       </tr>

		<tr>
       	<td>Meslek:</td>
       	<td> <select name="Meslek">

       	<option value="Doktor">Doktor</option>
       	<option value="Amele">Amele</option>
       	<option value="Mimar">Mimar</option>
       	<option value="Boş Beleş">Boş Beleş</option>
       	<option value="Yazılımcı">Yazılımcı</option>
       	 </select>  
       	  </td>
       </tr>

<tr>
	<td>İlgi Alanları:
	<input type="checkbox"  name="hobi[]" value="OYUN">OYUN
	<td><input type="checkbox"  name="hobi[]" value="GEZMEK">GEZMEK</td>
	<td><input type="checkbox"  name="hobi[]" value="SPOR">SPOR</td>
	</td>
	
	</tr>

	<tr>
		<td><input type="submit"  value="Kaydet"</td>
		<td><input type="submit"  value="İptal"</td>

	</tr>
	</table>
>