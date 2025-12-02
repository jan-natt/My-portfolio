<?php
$file = __DIR__ . '/cv.pdf'; // cv.pdf আপনার html ফাইলের পাশেই থাকতে হবে

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="Jannatul_Ferdous_CV.pdf"');
    header('Content-Length: ' . filesize($file));
    flush(); // browser buffer clear
    readfile($file);
    exit;
} else {
    echo "File not found!";
}
