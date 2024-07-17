
<?php
include('config.php');
include('fungsi.php');

// header
include('header.php');
?>

	<section class="content" style="text-align: justify">
			<h3 class="ui header">Analitycal Hierarchy Process (AHP)</h3>

			<p> &nbsp &nbsp &nbsp &nbsp Analytic Hierarchy Process (AHP) merupakan suatu model pendukung keputusan yang dikembangkan oleh Thomas L. Saaty. Model pendukung keputusan ini akan menguraikan masalah multi faktor atau multi kriteria yang kompleks menjadi suatu hirarki. Hirarki  didefinisikan sebagai suatu representasi dari sebuah permasalahan yang kompleks dalam suatu struktur multi level dimana level pertama adalah tujuan, yang diikuti level faktor, kriteria, sub kriteria, dan seterusnya ke bawah hingga level terakhir dari alternatif. AHP membantu para pengambil keputusan untuk memperoleh solusi terbaik dengan mendekomposisi permasalahan kompleks ke dalam bentuk yang lebih sederhana untuk kemudian melakukan sintesis terhadap berbagai faktor yang terlibat dalam permasalahan pengambilan keputusan tersebut. AHP mempertimbangkan aspek kualitatif dan kuantitatif dari suatu keputusan dan mengurangi kompleksitas suatu keputusan dengan membuat perbandingan satu-satu dari berbagai kriteria yang dipilih untuk kemudian mengolah dan memperoleh hasilnya.</p>

			<h3 class="ui header">Tabel Integritas Kepentingan Metode AHP</h3>
			<table class="ui collapsing striped blue table" border="1">
				<thead class="center aligned">
					<tr>
						<th>Integritas Kepentingan</th>
						<th>Keterangan Tingkat</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="center aligned">1</td>
						<td>Kedua elemen sama pentingnya</td>
					</tr>
					<tr>
						<td class="center aligned">3</td>
						<td>Elemen yang satu sedikit lebih penting daripada elemen yang lainnya</td>
					</tr>
					<tr>
						<td class="center aligned">5</td>
						<td>Elemen yang satu lebih penting daripada elemen yang lainnya</td>
					</tr>
					<tr>
						<td class="center aligned">7</td>
						<td>Satu elemen jelas lebih mutlak penting daripada elemen yang lainnya</td>
					</tr>
					<tr>
						<td class="center aligned">9</td>
						<td>Satu elemen mutlak penting dari pada elemen yang lainnya</td>
					</tr>
					<tr>
						<td class="center aligned">2, 4, 6, 8</td>
						<td>Nilai-niali antara dua nilai pertimbangan yang berdekatan</td>
					</tr>
					<tr>
						<td class="center aligned">Kebalikan</td>
						<td>Jika aktivitas i mendapat satu angka dibanding dengan aktivitas j, maka j <br>
						memiliki nilai kebalikan dibandingkan dengan i.</td>
					</tr>
				</tbody>
			</table>

			<h3 class="ui header">Tabel Random Index Metode AHP</h3>
			<table class="ui collapsing striped blue table" border="1">
				<thead>
					<tr class="center aligned">
						<th>Ordo Matrix</th>
						<th>1</th>
						<th>2</th>
						<th>3</th>
						<th>4</th>
						<th>5</th>
						<th>6</th>
						<th>7</th>
						<th>8</th>
						<th>9</th>
						<th>10</th>
						<th>11</th>
						<th>12</th>
						<th>13</th>
						<th>14</th>
						<th>15</th>						
					</tr>
				</thead>
				<tbody>
					<tr class="center aligned">
						<td>RI</td>
						<td>0</td>
						<td>0</td>
						<td>0,58</td>
						<td>0,9</td>
						<td>1,12</td>
						<td>1,24</td>
						<td>1,32</td>
						<td>1,41</td>
						<td>1,45</td>
						<td>1,49</td>
						<td>1,51</td>
						<td>1,48</td>
						<td>1,56</td>
						<td>1,57</td>
						<td>1,59</td>
					</tr>
				</tbody>
			</table>

	</section>

<?php include('footer.php'); ?>
