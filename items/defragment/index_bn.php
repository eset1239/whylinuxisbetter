<?php require("../../entete.php");?> <?php require("../../base.php");?> <?php require("../../fonctions.php");?>

<div id="corps">

<h2>ডিস্ক ডিফ্রাগমেন্টের ঝামেলা থেকে মুক্তি।</h2>

<p><b>ডিস্ক ডিফ্রাগমেন্ট</b> কি? আপনি যদি মোটামুটি একজন Windows/Mac ইউজার হন সেক্ষেত্রে এই শব্দটার সাথে আপনি অবশ্যই পরিচিত। মজার ব্যাপার হচ্ছে লিনাক্সে অভ্যস্থ হলে আপনি এই শব্দটা হয়তো কোনদিন শুনতেনই না... কেন? কারন <i>লিনাক্সে ডিস্ক ডিফ্রাগমেন্টেশনের কোন প্রয়োজন নেই।</i> </p>

<p>মনে করুন আপনার হার্ডডিস্ক একটা বিশাল ফাইল কেবিনেট। এতে আছে লক্ষ লক্ষ ড্রয়ার (<a href="http://www.pps.jussieu.fr/~dicosmo/">Roberto 
Di Cosmo</a> কে ধন্যবাদ এই তুলনাটির জন্য)। প্রতিটা ড্রয়ারের ধারন ক্ষমতা নির্দিষ্ট। তাই যদি এমন ফাইল থাকে যেটি ড্রয়ারের ধারন ক্ষমতার চেয়ে বড় তাহলে সেটাকে প্রয়োজনমত টুকরো (fragment) করে কয়েকটি আলাদা ড্রায়ারে রাখতে হবে। কিছু ফাইল আছে এতই বড় যে সেগুলো রাখতে কয়েক হাজার ড্রয়ার দরকার হতে পারে। আবার যখন কোন ফাইল দেখার (fetch) দরকার হয় তখন ঐ ফাইলের সবগুলো টুকরো বিভিন্ন ড্রয়ার থেকে এনে একত্রে জড়ো করতে হবে।</p>

<p>এখন ধরুন আপনি এই বিশাল ফাইল কেবিনেটটির মালিক, কিন্তু আপনার এটা দেখাশোনা/ গুছিয়ে রাখার মত সময় নেই। আপনি একাজের জন্য একজন লোক ঠিক করতে চাচ্ছেন। দুজন আগ্রহী মানুষ এগিয়ে এল... <b>উইলি</b> আর <b>লিনা</b>।</p>

<ul>

<li><b>উইলি</b>র কাজ করার পদ্ধতিটা অনেকটা এরকম : ফাইল ডিলিট করার আদেশ পেলে সে ঐ ফাইলের সাথে সংশ্লিষ্ট ড্রয়ারগুলো খালি করে ফেলে। নতুন ফাইল পেলে সেগুলোকে ড্রয়ারের ধারন ক্ষমতা অনুযায়ী আগে টুকরো-টুকরো করে ফেলে, তারপর এলোমেলোভাবে খালি ড্রয়ার পেলেই টুকরোগুলো ভরে দিতে থাকে। সুতরাং এরকম হরহামেশাই হয় যে একটা ফাইলের প্রথম টুকরোটা হয়তো ২ নম্বর ড্রয়ারে, পরের টুকরোটা ৩৪৬ নম্বরে, আর তৃতীয়টা ৮৭৭ নম্বর ড্রয়ারে। বুঝতেই পারছেন, বড় ফাইল- যেগুলো রাখতে কয়েক হাজার ড্রয়ার লাগে, সেগুলো আপনি চাইলেই চট করে নিয়ে আসাটা সম্ভব নয়। আর ফাইলের সংখ্যা বাড়ার সাথে সাথে উইলির পরিশ্রমও বাড়তে থাকবে। সমাধান কি? এক/দুই সপ্তাহ পর পর একদিনের জন্য কয়েক ডজন লোক ভাড়া করতে হবে, যাদের কাজ হবে ড্রয়ারগুলো গুছিয়ে দেয়া। এমনভাবে গুছিয়ে দিতে হবে যেন একেকটা ফাইলের টুকরাগুলো কাছাকাছি ড্রয়ারে থাকে। তারা চলে যাবার পর উইলি পরবর্তী সপ্তাহে নতুন ফাইল ছড়িয়ে ছিটিয়ে রাখতে গিয়ে আবারো কেবিনেটটাকে আগোছালো বানিয়ে ফেলবে। সমাধান? আবারো ডাকো গোছানো-বাহিনী</li>

<li> <b>লিনা</b>র কৌশল কিছুটা ভিন্ন: কতটা করে পাশাপাশি ড্রয়ার কোথায় খালি আছে সে একটা আলাদা কাগজে তার হিসেব রাখে। যখন একটা নতুন ফাইল আসে, সে তার হাতের কাগজটায় দেখে নেয়ঃ কোথায় পাশাপাশি যথেষ্ঠ সংখ্যক ড্রয়ার আছে যেন পুরো ফাইলটার জায়গা হয়ে যায়। এভাবে করলে একটা ফাইলের সবগুলো টুকরো সবসময় পাশাপাশি ড্রয়ারে থাকবে। কাজেই একদিকে যেমন কেবিনেট থাকছে পরিচ্ছন্ন, অন্যদিকে চাইলেই চট করে একটা ফাইল হাজির করা লিনার জন্য কঠিন কিছু নয়। সপ্তাহান্তে লোকজন ডেকে এনে গোছানো-অভিযান চালানোর কোন প্রশ্নই আসে না, কারন লিনার কেবিনেট সবসময়ই গোছানো।</li>

</ul>

<p>নিঃসন্দেহে আপনি আপনার ফাইল কেবিনেটের দায়িত্বটা লিনাকেই দেবেন, তাইনা? (এমনিতেও হয়তো দিতেন, কারন গোছানোর কাজে মেয়েরা একটু বেশিই পারদর্শী হয় :)) যাহোক, আপনার অনুমান ঠিকই আছে, Windows/Mac কাজ করে উইলির মত, আর লিনাক্স ব্যবহার করে লিনার পদ্ধতি। আপনি যত বেশি Windows ব্যবহার করবেন, এটা তত স্লো হবে। আর লিনাক্সে সবসময়ই পাবেন একদম প্রথম দিনের পারফরমেন্স।</p>

<img src="Images/defragment.png" />

</div>
</body>
</html>
