@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-3 p-5">
        <img src="https://avatars3.githubusercontent.com/u/11586702?s=460&v=4" class="rounded-circle" style="height: 200px;">
      </div>
      <div class="col-9 pt-5">
        <div class="d-flex justify-content-between align-items-baseline">
            <h1>{{ $user->username }}</h1>
            <a href="#">Add new Post</a>
        </div>
        <div class="d-flex">
            <div class="pr-5"><strong>25</strong> Post</div>
            <div class="pr-5"><strong>21k</strong> Followers</div>
            <div class="pr-5"><strong>200</strong> Following</div>
        </div>
        <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
        <div class="">{{ $user->profile->description }}</div>
        <div><a href="#">{{ $user->profile->url ?? 'N\A' }}</a></div>
      </div>
  </div>
  <div class="row  pt-5">
    <div class="col-4">
        <img src="https://www.kariyermimari.com.tr/images/kmSiteResimler/php.png" class="w-100">
    </div>
    <div class="col-4">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAW8AAACJCAMAAADUiEkNAAABaFBMVEWaoMZzeaErKjchHiVsfrc8Plf///8aFRhgZIUbFxyepMxJSVIfGyErKjhWV2wdGR4mJC43NT3r6+tHSWA3OVJ3hrs7PVJxd583OEtpbYuYnsUUEBrl5eUAAAiLk72Nk7d/h7Worc0iITBpbpIRCw2Ajr729fCEiaxGSWVwgbgdHCyPlr9OUnEmIzZAQVNUVFtSUlkxLjxZSGBvb3I+PUdmdUmSkpVhYWaDgoYuNkGayhmQbpNoUm6feaJNQFV5Xn5BRz1IUD9dakaMOU+dPFQ5LDpPLz8fKTV2eptLiYxRmJoyQUpBbXI9YWdecrJyhE5TXkM0NFWpRU3xRkfbSEZ9nDKMsifQq0D5xTc/WE6SvyJkfzx6Z1Ptvzd/blD2Rz+EQVViWVJlQla5mUUvK05NPTiPZDoQHjeyejuBl1MgGjR6Vzk4OzpxNEerdTsSFTVmSjiwQFnKzt3Dx9wkAh+qqqw3UVlOkJNNlkuRAAALK0lEQVR4nO2dDVvaWBaAIZWVgplBB6pNu5DGqpWQQggmsVgVv+oHCrYzO+7s7Gxnd9tax+5s61r//t5782ESEg2Y5IbhvrUIuZTnyevx5Jxz0SYSBAKBQCAQCAQCgUAgEAgEAoFAIBAIBAKBQCAQCAQCgUAgEAgEwh3IRAbuM40Fmd1vomKXwX2y+Ml88/R+RIyPp4nwxP17kfHtd0ke9+niJhOdbuh75IVnJqCJiQjQfCdLuM8YL8i3+CAM8s8fPEgdZ48fPAA3+dSE5jtZxH3KWNF8p8Lg9ZvvV49/ePGX1PGPJz+mTN/TIy08PN/1N2/evP7ri59e/O3nk7+f/HJs+E5OL+A+aYyEGN/fv/nH24OfXrzo/npycvJr3vQ90sJD9P3P129Tx90flo7zP//rl+PUte9RFg59T4jPETNBkwcf/z6emTmGNxbfIywc+Z7MIqhQuWfxnZxO4j5xTFh909H5BuA+czzg850cyWEKRt93ET5X8Enc5gc9vnMzogg/00Hb7/V9B+FzYz7hY/ZdZPiWaprvXH1NXGvmKKq+IuYoMVzfg0+vfPsuxizADd9KFfnOra3lqJlm/WWz3ny5+rIZoHAX39MDC3fzvehIMnOF+Pum6k0qtyLWV1fW6s3VlZV6qL6B8QF1FF18F5wbdsUY5xPFyCerTQr4ftlcra+FHt9Q+GDzWd7Nt/NJ4JtgMa6+r+sTEeTtej0H1a/kgtPt4XvAcSHj03ch/r7DwsP3YL29m+/FBHMNfFJheHyDapAWXGpCTlvlKEGg4Sp3d9+DCTcukRaKTywkGN134Mbuhu67KlWtvun1rrDeEVob3M4OOvAK/AGHGypafff+w/vTyW5X4GT/3xSevgcSvqilkHkrf7LwhEHPmYupb1CAW30LSy3q49JZZ3Ln8+arzU1qa2t7c3MbhHNWboDb305/PwXOO8KkWr57fA8kvKAF+PyUBafvsRj7VmzxLbS6Z0vnZx2B2tzafrv16dPmp8+bMNLLssJR1IfTD/85ff97R1BULgjfAwjXfB9NefmGz3HzbX+rl35PP9KzFsK7wnTfiqTYfHc69NK5sNGCsre2drY+72x92qZoSq1CwcD3b6f/PV8SaDmQ+Ib0eV3TGp6jx16+Ge2a6mx3Sg81dkvQ4wK8l9EOgrrUWFsw1jQCNe5+vaTPJ9Fti97ZebWz/WrzM7UNw7uRRfFMi/S7d0LrnOakWgD5exDhuu8v8+6+p3gP33mDCpPIPASfnzGJBfi4xDDWtcSu8eBZoBXODfWJZWa1je7Q6EO7R6OPQOqTgYS7NZiwHuSfIN9feK0n6vUNd/rgTb4CfadSz1hmAT6eLjLWNc03PACeEL5v07r1EfjLcY4DAfruS7hLg4n6HX7KTN/wS1J0vCbynU5XwKd80uY7qfkGaym0VnqYBoD7lTB8VyXJrd+hQaV90NYDm5OlLLhAclWlDAoVtZzNcooq2b4Cd/Pdz/TKwzdzgXRfwFeC7byb7/w0yz4Dn2b5Xt9wDQjPp8ELsCw7mwd3Q4lv+/VSk718tUdd7S3v74MPGNuSVFblsiwrwDulcrIsKkojK/sU7sN3H8JdGkzQXyZ4LX2j14HtvLvvIozsfLro5ltfY9HT03n4FQjKNcS9/kZwh3vtw/b/Dtrt9uHhIQxwTry8nJRrkppVaLWsVDmO859T/Pju492FrvHNfzGLb629vNE3e6tvmL9ZNijXELMedMknB/sguPeW2+2vIMThIl2VagqIb/CRvRRrlw1w0az6LQl9+fY/n7W7BoWKrb+E10vk2/GvDN8wZ8x6+K6YvuGzK2ygLdPN86plml6mLUFMcyChU5wocnSZosswr1erPkPcl2//2/aLdt8X9noQJnDYzrv6Ts+m0fUS+U5VKvAKafjW17Qksht4+h5gPujM8n4zSsC+C3bfT+btvj3aeVSfoEIvX2FR/jbQ6xNt7RlKIijSk2yAtl18c4YfwRBJcy72+idU32MJu2+v8Ylef8OehmVRfZLSy+ykUX/ra9BNPvD0fe1bn580UDqmBUHYWAe3cO6aVQPZ5QnYt2MHc86ev4FvxtN3JZ2eTbJsUau/Z1EGMXyDtTSoCVEeWgg+fffUg2Xom6Y7G2cbXaGzdLbUOatKXPx9jxUWC1onbzzBrZ03628WRrDe77BJe/3NatGd0AuVYDcsjPpE0X1zkspRwkbn43m3RX1cb33stGT/M5IIffc09EcXemTr2ztu7bxRnySQRJf+Mm/Z3kNFTLDVd29/ieJb6G60hKUNofuxtdSi4hnfPb4LKJ88Ng0j387gLFmd3uKbQcOTgH8aw3m9bKCJttDt0uvrNLDe3QCH4pi/nQ09qMCh74xpuOjSzvflO4z07VWfCGjzUkC7mP0MAaPz7Wzoi/NTep+j4zY+6cd3KOnbT/1tHgbte7nsLp++fWwVru8jrd+xRKNbO9+Xb9gGJUPy7dgvNgVTHL3c5rQxLKcqsJMv07Dj5NAAnIMTFLisSLcOCgP2bW8w9X7nwunb+Y96fOd13/ke3yVQiqeCTt/X9YlbfO/t0XtXy/tX1NUV0MupKpzFSnJWkhuqXEN3wJeg2pAlSapN3rKXGarvMbS/M8Xb13vfDVH6BrTvpu9d8KDCMuhgspioaJ8sT00Hnb7NfFLtnVfRh1d7cD64B+eDX9F8kKtK5UtJlVUFGFdUSW1I4GFWLcPgvmUeELRva4N5dAH31fS5oI5buwPOF9XXxiMGPmC0g8VEpmhd044G/XYhI58oLr6/XrUP9tvA9+H+/oF2DPiWpawqNWCEq6oqS6pUq8GCkZ68ZVAYpu8C2sZ8bNPr7hvhJZG5YS0gzPh2yycHX+llGNjUwcH1iFCsUpM1+J78RpZWZIWuitrbxLMR5xNLg3n0Beqet6/f4BsjPvcvrXdomjYXGpylfLlRd5i+4bBqav7CZte1nceP93wwaIL2bWkw+YvH8/NTY7blmPs23l/V6OMdU3h9WxvMo6O5J4mxnuWe8hs/5n5azTI/GTrfULnj/d+u7Tx+dN+SUZ+g+eBQ+O7Zobf5Zgqx9q1UzflgH1vucfXNa9fS3nYeP+Z+g21/Zxh8OxpMwzczZxbmsfvhhsQw1ydWs7pvpmg5sjhXjOFvEur9+eKh8Z1g+OJc4TrKFwuWu0B2kY9fOXg9H9T308RmfaUeivPgfQMY6NyRWJDrIs/EL5kkruO7pl8vRbF5b21taHxDGJ43wxwmER4QS9cQZ7+TW1vN5V4Ole+EHuYFENg8sB3PwNYx65Os4TsnNleHzTeEQXEda9kJSz4xrperufrM8OTvoQP/zxcT38R3eNh8hwnxjUC/7zE3iciFCvENsf4+6ih+/zfxHbZl4tsK8R0+TMmCf12PPPH5AhPPZ61Mj4jvjPjUgm/b6tRjD6ZUn8Ynxi08rYyKb2qQHDJx79LLt5wb5AXvj4zvgfTcm3j0Zw8eDfR6o+NbjPD/3PFm3P3qidtOCDDfPf0Wt+2J8eejcr2Eb8Rt3B/HyoSYdrX9x/SdyGQW0K/3wMash+0/qG8I63nKWMGtJTwW3BMoZnBbCZFYCsctJUziKBy3k1ApxU84biXhEj/huI2EDB834biFhA2PW7AD3D5Ch8Ft2A5uHeETL+G4bURArITjlhEJuCVbwK0iGpKxKVNwm4iI2LSauEVERVyE4/YQGTERjltDdMRDOG4LEVKMg3DcEqKkhFt2crR8x2GYgltBtOAXjttAxGDv7XELiBrcwnGff+RgFo779DGAdZiC++RxgLPzwX3uWMAoHPep4wGfcNxnjokFXL7/DwkAOTxjwvP4AAAAAElFTkSuQmCC" class="w-100 ">
    </div>
    <div class="col-4">
        <img src="http://www.php-training.in/blog/wp-content/uploads/2019/05/Php-7-2-e1557734345218.jpg" class="w-100">
    </div>
    <div class="col-4">
        <img src="http://www.php-training.in/blog/wp-content/uploads/2019/05/Php-7-2-e1557734345218.jpg" class="w-100">
    </div>
    <div class="col-4">
        <img src="https://www.kariyermimari.com.tr/images/kmSiteResimler/php.png" class="w-100">
    </div>
    <div class="col-4">
        <img src="http://www.php-training.in/blog/wp-content/uploads/2019/05/Php-7-2-e1557734345218.jpg" class="w-100">
    </div>
  </div>  
</div>
@endsection
