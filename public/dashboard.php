<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Data</title>
</head>
<body>
   <?php
// Grab raw data from the Linux shell
$uptime = shell_exec("uptime -p");
$memory_raw = shell_exec("free -m");
$cpu_info = shell_exec("grep 'model name' /proc/cpuinfo | head -n 1 | cut -d: -f2");

// Get GPU Model from lspci
$gpu_info = shell_exec("lspci | grep -i 'vga\|3d' | cut -d: -f3");

$CPU = trim($cpu_info);
$GPU = trim($gpu_info);

// We split the memory string to get the 'Used' and 'Total' numbers
$lines = explode("\n", trim($memory_raw));
$mem_stats = preg_split('/\s+/', $lines[1]); 
$total_mem = $mem_stats[1];
$used_mem = $mem_stats[2];

// 3. Calculate a percentage for a Progress Bar
$percent = ($used_mem / $total_mem) * 100;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Linux PHP Dash</title>
</head>
<body>
    <h1>System Dashboard</h1>
    <p class="comment">
        yeah those are my specs
    </p>
    <div class="card">
        <strong>Uptime:</strong> <?php echo $uptime; ?>
    </div>

    <div>
        
    <div class="card">
        <strong>RAM Usage:</strong> <?php echo "$used_mem MB / $total_mem MB"; ?>
        <div class="bar-container" >
            <div class="bar-fill" style="width: <?php echo $percent; ?>%" ></div>
        </div>
    </div>

    <div class="card">
        <strong>CPU: </strong> <?php echo $CPU; ?>
    </div>

    <div class="card">
        <strong>GPU:</strong> <?php echo $GPU; ?>
    </div>


    </div>





    <div class="card">
        <strong>
            <a href="index.php">Go Back?</a>
        </strong>
        
    </div>

</body>
</html>  


</body>
</html>