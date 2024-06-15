<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>QC Monitor</title>

	<script src="<?= base_url();?>libs/js/Chart.js/2.9.4/Chart.js"></script>

	<style type="text/css">
		/* General Reset */
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: Arial, sans-serif;
		}

		/* Container */
		.container {
			padding: 10px;
			margin: 10px;
			border: 1px solid #D0D0D0;
			box-shadow: 0 0 8px #D0D0D0;
		}

		/* Row */
		.row {
			display: flex;
			flex-wrap: wrap;
			margin: 0 -15px;
		}

		/* Column */
		.column {
			flex: 1;
			padding: 15px;
			min-width: 300px;
			max-width: 50%;
			box-sizing: border-box;
		}

		/* Card */
		.card {
			background-color: #fff;
			border: 1px solid #e0e0e0;
			border-radius: 8px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
			padding: 10px;
			margin: 10px 0;
			transition: box-shadow 0.3s ease;
		}

		.card:hover {
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
		}

		/* Card Content */
		.card p {
			padding: 10px;
			font-size: 1em;
			color: #666;
		}

		/* Utility Classes */
		.text-center {
			text-align: center;
		}

		.mt-20 {
			margin-top: 20px;
		}

		.mb-20 {
			margin-bottom: 20px;
		}
		
		.body {
			margin: 0 15px 0 15px;
			min-height: 96px;
		}

		p {
			margin: 0 0 10px;
			padding:0;
		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}
		
		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 25px;
			font-weight: normal;
		}
		
		h2 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 21px;
			font-weight: normal;
		}
		
		h3 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 17px;
			font-weight: normal;
		}
		
		h4 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 13px;
			font-weight: normal;
		}

	</style>
</head>
<body>
    <div class="container">
		<h2>QC Monitor</h2>

        <div class="body">
			<div class="row">
				<div class="column">
					<div class="card">
						<h1>Not Good</h1>
						<p style="font-size:4rem; text-align:center;" id="ng_data">0</p>
						
						<script>
							var url = '<?= site_url(). '/welcome/ajax/get_log' ?>';
							fetch(url, {
							method: 'POST',
							body: new URLSearchParams({
										'type': 'daily',
										'status': 'not good',
									}), 
							headers:{
								'Content-Type': 'application/x-www-form-urlencoded'
							}
							}).then(res => {
								if (!res.ok) {
									throw new Error('Network res was not ok ');
								}
								return res.json();
							})
							.then(data => {
								console.log('Success:', JSON.stringify(data));
								if(data == null) return;
								document.getElementById('ng_data').innerHTML = data[0].qty
							})
							.catch(error => console.error('Error:', error));

						</script>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<h1>Good</h1>
						<p style="font-size:4rem; text-align:center;" id="g_data">0</p>
						<script>
							var url = '<?= site_url(). '/welcome/ajax/get_log' ?>';
							fetch(url, {
							method: 'POST',
							body: new URLSearchParams({
										'type': 'daily',
										'status': 'good',
									}), 
							headers:{
								'Content-Type': 'application/x-www-form-urlencoded'
							}
							}).then(res => {
								if (!res.ok) {
									throw new Error('Network res was not ok ');
								}
								return res.json();
							})
							.then(data => {
								console.log('Success:', JSON.stringify(data));
								if(data == null) return;
								document.getElementById('g_data').innerHTML = data[0].qty
							})
							.catch(error => console.error('Error:', error));

						</script>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<div class="card">
						<h1>Chart QC Last Month</h1>

						<canvas id="myChartLine" style="width:100%;max-width:700px"></canvas>

						<script>
							var url = '<?= site_url(). '/welcome/ajax/get_log' ?>';
							fetch(url, {
							method: 'POST',
							body: new URLSearchParams({
										'type': 'month',
									}), 
							headers:{
								'Content-Type': 'application/x-www-form-urlencoded'
							}
							}).then(res => {
								if (!res.ok) {
									throw new Error('Network res was not ok ' + res.statusText);
								}
								return res.json();
							})
							.then(data => {
								console.log('Success:', JSON.stringify(data));

								var data_ng = data.map(dt => {
									return (dt.status == 0)? dt.qty:0;
								});
								var data_g = data.map(dt => {
									return (dt.status == 1)? dt.qty:0;
								});
								var data_label = data.map(dt => {
									return dt.date;
								});
								
								new Chart("myChartLine", {
								type: "line",
								data: {
									labels: data_label,
									datasets: [{
									label: "Not Good",
									data: data_ng,
									borderColor: "red",
									fill: false
									},{
									label: "Good",
									data: data_g,
									borderColor: "green",
									fill: false
									}]
								},
								options: {
									legend: {
										display: true,
									}
								}
								});
							})
							.catch(error => console.error('Error:', error));

						</script>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<h1>% of Products QC</h1>
						
						<canvas id="myChartPie" style="width:100%;max-width:700px"></canvas>

						<script>
							var url = '<?= site_url(). '/welcome/ajax/get_log' ?>';
							fetch(url, {
							method: 'POST',
							body: new URLSearchParams({
										'type': 'daily',
									}), 
							headers:{
								'Content-Type': 'application/x-www-form-urlencoded'
							}
							}).then(res => {
								if (!res.ok) {
									throw new Error('Network res was not ok ' + res.statusText);
								}
								return res.json();
							})
							.then(data => {
								console.log('Success:', JSON.stringify(data));
								if(data == null) return;
								
								// var data_ng = data.map(dt => {
								// 	if(dt.status == 0) {
								// 		return dt.qty;
								// 	}
								// });
								// var data_g = data.map(dt => {
								// 	if(dt.status == 1) {
								// 		return dt.qty;
								// 	}
								// });
								data_ng = data.reduce((total, val) => {
									if (val.status == 0) {
										return total + parseInt(val.qty, 10);
									} else {
										return total;
									}
								}, 0);
								data_g = data.reduce((total, val) => {
									if (val.status == 1) {
										return total + parseInt(val.qty, 10);
									} else {
										return total;
									}
								}, 0);

								var xValuesPie = ["Not Good", "Good"];
								var yValuesPie = [data_ng, data_g];
								var barColorsPie = ["red", "green"];
								new Chart("myChartPie", {
								type: "doughnut",
								data: {
									labels: xValuesPie,
									datasets: [{
									backgroundColor: barColorsPie,
									data: yValuesPie
									}]
								},
								options: {
									title: {
									display: true,
									text: "World Wide Wine Production"
									}
								}
								});
							})
							.catch(error => console.error('Error:', error));

						</script>
					</div>
				</div>
			</div>
        </div>

		<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
    </div>
</body>
</html>
