<?php
        $msisdn = "";
        if (isset($_SERVER['HTTP_X_UP_CALLING_LINE_ID'])) {
            $msisdn = trim($_SERVER['HTTP_X_UP_CALLING_LINE_ID']);
        } else if (isset($_SERVER['HTTP_X_HTS_CLID'])) {
            $msisdn = trim($_SERVER['HTTP_X_HTS_CLID']);
        } else if (isset($_SERVER['HTTP_MSISDN'])) {
            $msisdn = trim($_SERVER['HTTP_MSISDN']);
        } else if (isset($_COOKIE['User-Identity-Forward-msisdn'])) {
            $msisdn = $_COOKIE['User-Identity-Forward-msisdn'];
        } else if (isset($_SERVER["HTTP_X_MSISDN"])) {
            $msisdn = $_SERVER["HTTP_X_MSISDN"];
        }

        $msisdn = substr($msisdn, 0, 13);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BTS Lottery 2025</title>
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Google Fonts for Bengali -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>

<body>

    <div class="container">
        <!-- Banner Section -->
        <header class="banner-section">
            <div class="banner-placeholder">
                <!-- In a real scenario, this would be an img tag with the banner image -->
                <img src="{{ asset('images/header_.png') }}" alt="BTS Lottery 2025 Banner" class="banner-img"
                    onerror="this.style.display='none'; document.querySelector('.banner-alt').style.display='block';">
                <div class="banner-alt" style="display:none; padding: 20px; background: #e0f7fa; text-align: center;">
                    <h1 style="color: #0288d1;">বিটিএস লটারি-২০২৫</h1>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="content-section">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="BTS Logo" class="logo"
                    onerror="this.src='https://via.placeholder.com/100x100?text=BTS+Logo'">
            </div>

            <div class="text-content">
                <h2 class="org-name-red">বাংলাদেশ থ্যালাসেমিয়া সমিতি (বিটিএস)</h2>
                <p class="mission-text">বাংলাদেশ থ্যালাসেমিয়া সমিতি হাসপাতাল নির্মাণের লক্ষ্যে</p>
                <h1 class="lottery-title">বিটিএস লটারি-২০২৫</h1>
                <p class="gov-approval">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার অনুমোদিত</p>
                <p class="prize-info">৫০ লক্ষ টাকার ১৩৫ টি পুরস্কার</p>
                <p class="price-info">মূল্য: ২০ টাকা</p>
            </div>

            <!-- Form Section -->
            <form id="lottery-form">
                <div class="form-group">
                    <label for="mobile">Mobile no input</label>
                    <input type="tel" id="mobile" value="<?= $msisdn ?>" name="mobile" placeholder="Enter your mobile number" required>
                </div>

                <div class="terms-container">
                    <a href="#" class="terms-btn-style">
                        <i class="far fa-clipboard"></i>
                        Terms & Conditions
                    </a>
                </div>

                <button type="submit" class="purchase-btn">
                    <i class="fa-solid fa-ticket"></i> Purchase
                </button>
            </form>



           <div class="prize-card">
                <div class="prize-header">
                  <h3>পুরস্কারের তালিকা</h3>
                </div>

            <div class="prize-grid">
              <div class="prize-item">
                <span class="prize-label">১ম পুরস্কার:</span> (১টি) ফ্ল্যাট/নগদ ৩০ লক্ষ টাকা
              </div>
              <div class="prize-item">
                <span class="prize-label">২য় পুরস্কার:</span> (১টি) গাড়ি/৭ লক্ষ টাকা
              </div>
              <div class="prize-item">
                <span class="prize-label">৩য় পুরস্কার:</span> (১টি) মোটরসাইকেল/১ লক্ষ ৫০ হাজার টাকা
              </div>
              <div class="prize-item">
                <span class="prize-label">৪র্থ পুরস্কার:</span> (১টি) নগদ ৫০ হাজার টাকা
              </div>
              <div class="prize-item">
                <span class="prize-label">৫ম পুরস্কার:</span> (১টি) নগদ ৩০ হাজার টাকা
              </div>
              <div class="prize-item">
                <span class="prize-label">৬ষ্ঠ পুরস্কার:</span> (১০টি) প্রতিটি ৫ হাজার টাকা
              </div>
              <div class="prize-item">
                <span class="prize-label">৭ম পুরস্কার:</span> (১০০টি) প্রতিটি ২ হাজার টাকা
              </div>
              <div class="prize-item">
                <span class="prize-label">৮ম পুরস্কার:</span> (৮২০টি) প্রতিটি ১ হাজার টাকা
              </div>
            </div>

            <div class="prize-footer">
              <p class="total-text">সর্বমোট ৫০ লক্ষ টাকার ৯৩৫ টি পুরষ্কার</p>
              <p class="draw-date">ড্র: ২৩ জানুয়ারি ২০২৬ ইং</p>
            </div>
        </div>


        </main>

        <footer>
            <p>Powered by</p>
            <h3>B2M Technologies Ltd</h3>
        </footer>
    </div>


    <div id="termsModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h3>Terms & Conditions</h3>
                <span class="close-btn">&times;</span>
            </div>
            <div class="modal-body">
                <ul>
                    <li>অনুমোদিত ব্যাংক, প্রতিষ্ঠান ও এই পোর্টাল ব্যতীত অন্য কোনো মাধ্যম হতে টিকেট ক্রয় করলে ঐ টিকেটের জন্য বাংলাদেশ থ্যালাসামিয়া              সমিতি ও সংশ্লিষ্ট কর্তৃপক্ষ দায়ী থাকবে না।</li>
                    <li>ক্রয়কৃত লটারীর টিকেট নম্বর ও কনফার্মেশন কেবলমাত্র "BTS Lottery" আইডি থেকে এসএমএস এর মাধ্যমে পাঠানো হবে।</li>
                    <li>নির্ধারিত তারিখে বাংলাদেশ থ্যালাসেমিয়া সমিতি কর্তৃপক্ষ ও বিশিষ্ট ব্যাক্তিদের উপস্থিতিতে ঢাকায় ড্র অনুষ্ঠিত হবে।</li>
                    <li>লটারীর ড্র এর নির্ধারিত তারিখ ২৩ জানুয়ারী ২০২৬; বিজয়ীদের তালিকা সংবাদপত্রের মাধ্যমে প্রকাশ করা হবে। সেই সাথে বর্তমান               ওয়েবসাইটেও (bdlotteryticket.com) বিজয়ীদের তালিকা প্রকাশ হবে।</li>
                    <li>ফলাফল প্রকাশের ৩০ দিনের মধ্যে বিজয়ীদের পুরষ্কারের জন্য নাম ঠিকানা, সত্যায়িত ছবি ও টিকেট প্রাপ্তির এসএমএস সহ লিখিত দাবী                কর্তৃপক্ষের নিকট দাখিল করতে হবে। অনলাইন টিকেটের ক্ষেত্রে টিকেটহোল্ডারকে হেল্পলাইনে (09606541934) অথবা support@wintelbd.com এ যোগাযোগ           করার জন্য অনুরোধ জানানো হচ্ছে।</li>
                    <li>৬ষ্ঠ হতে ৮ম পুরস্কারের ক্ষেত্রে বিজয়ী নম্বর ক,খ,গ, ঘ,ঙ, চ, ছ, জ, ঝ, ঞ প্রত্যেক সিরিজের ক্ষেত্রে প্রযোজ্য হবে।</li>
                    <li>এই লটারী সংক্রান্ত যে কোন বিষয়ে বাংলাদেশ থ্যালাসেমিয়া সমিতি কর্তৃপক্ষের সিদ্ধান্তই চূড়ান্ত বলে বিবেচিত হবে।</li>
                </ul>

                <p style="margin-top:10px; font-size: 12px;font-weight:bold; color: #666;">
                    <span style="color: #fe0000f7;">***</span> এই লটারী সংক্রান্ত যে কোন বিষয়ে বাংলাদেশ থ্যালাসেমিয়া সমিতি কর্তৃপক্ষের সিদ্ধান্তই চূড়ান্ত বলে বিবেচিত হবে।
                </p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

    // Select Elements
    var modal = $('#termsModal');
    // Select the link inside the label
    var triggerBtn = $('.terms-btn-style');
    var closeBtn = $('.close-btn');

    // 1. Open Modal when "Terms & Condition" link is clicked
    triggerBtn.on('click', function(e) {
        e.preventDefault(); // Stop page from jumping or reloading
        modal.css('display', 'flex'); // Flex centers it due to CSS settings
    });

    // 2. Close Modal when 'x' is clicked
    closeBtn.on('click', function() {
        modal.fadeOut(200);
    });

    // 3. Close Modal when clicking outside the modal content
    $(window).on('click', function(e) {
        if ($(e.target).is(modal)) {
            modal.fadeOut(200);
        }
    });

    // Optional: Close on ESC key press
    $(document).on('keydown', function(e) {
        if (e.key === "Escape") {
            modal.fadeOut(200);
        }
    });

});
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
