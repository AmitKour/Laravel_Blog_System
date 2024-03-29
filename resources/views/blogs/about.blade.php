<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto flex justify-center">
            <a href="{{ route('blogs.public') }}" class="mr-6 hover:underline">Home</a>
            <a href="{{ route('blogs.about') }}" class="mr-6 hover:underline">About</a>
            <a href="{{ route('blogs.contact') }}" class="hover:underline">Contact</a>
        </div>
    </nav>
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl lg:text-4xl font-semibold text-center text-gray-800 mb-6">About</h1>
    <div class="text-center mb-6">
        <p class="text-lg text-gray-600">We are a small passionate team.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-16">
        <!-- Author Cards -->
        <div class="flex flex-col items-center space-y-4 md:space-y-6">
            <div class="w-32 h-32 md:w-48 md:h-48 overflow-hidden rounded-full bg-gray-200">
                <img src="data:image/webp;base64,UklGRv4VAABXRUJQVlA4IPIVAABwdQCdASo+AT4BPoFAm0olI6kmo1TZgSAQCWcvHBjgLCY7nl1ZNKonwKcxrlIIHYnZom9u4PgEZJ9wYALuZpwawvQD/SfrJf7/lg/bP+FwNvSHGwLzemn7I7lRzgZeFJvATmcN0fdXm9ZjLfw8emRA5UY+AOr73wY5aIOlV5FDA9RXFdfUUwSRgnXP2FMMtArmJ4kseZ3+pecd319y65g40/7t80/jl8MEh26UKie5Co+5PsrWG1izzAV0cqGe1N+4nOsHMOOSicqHvNqvwlypfzSWF9qLmQK+VyHCYqxkqekMvZLnGjy7vdXj8l/tt0mfmKXlZXU5OvjE8DQUwsN5GHzdzG/c+P80T3JNPStJpLToXznP0wngz8PCzlNQJwAcRK3etdmZ/96Nl2G6tsBm5ucXp5k6ZjeEW7bjfjsCVCrfVW7uZTT+Js0cb0xlAb84c1qZfduWRPZx/3zEgXzu7vsZtfU+tnqbn1sT6YClh0sW6oew9RLrB6iX4rQEXuxzh3wt91v1pywsm2DEuB54gF02z/kPsQxJ+jyYdV3Kyfqfj1CaON59FzC1JlE0w0v1WdyqXoYykSGGYu9jKXPOZDe1qQYgSh7H1zec7rurzeFlmPNWfmMzbrteku5GC4rrKUipWZjvhdq8ole2Nj+x5B0r1osbkNpQMB9xPTYMygQJrkEf91b9qU2lhPzuQhqHMpPaLhti6bVH8XaKExYm8l/8CoX8bso278ebRaz1H+xbv9rhuQlv1l5HvGgM/Q1zCgnOQCmrrSoyBd1DVQuiZBckKShHXzJLUV4SMVvYEFDW31/org8Ssx9aNZdHfp4Nbm3G5zvsF8jYRtenciNh0XdG+m+hI8ShfDzpb+Rw59ATpt4W9y2eVys+vKDzVwqE6vgexeTHf7suY3Tks8hfUbfu6bl51fN1pJZCoZQXv4pJfDZsJ47Z5y+bVYteWkElUpbZ9oF+9UrffDbRD6Ek4i99PIGPuP++QNBFcMLxSxj2wy9/+0nDDNmmEt+SwhIlTtaZOaq/m2YSH9Xpv9iIJfQqD+Ln6byJnCYLeCAKwjGACzz50GYJZYXOiCIPmz/5T85ypwlKYNtNI3LDohfDoe3LilQVevvvyemkxCHNsgukjXbf3w+lxJ0ggyX82KUK5nA1Ee0vsqAnP5ZZNoMbXsPtQ0oPIWIV7XfF9ZdEM2oyLxCoBlZS6JvBxpQ1R5q0cIoUQ4ancde07ez3yf28rFktBUVUFa0XChuDPqFaWIIXsAAA/u+lFF66sU1L/3svsQU4e1HebInm6aXoMewO6XYSJ5dglakP7VNESC1PbacJU7M+9HNhSlJGGV91GXyOEqtjqnfiDJWY/FRuph3HhRv/GZf9QVEFPyOchEUkxD28ZxrSu84kHiK7gE9Z4LgVfm+PXhX2xmCp9BcKtiQv7SDiyOEv9X4cHQpfmpXAJHqaKwHzMgSKcZV3gsExIi+CgoRU/xPd4fBda8YopCmYTOJLbdRUH4qhogLjk50uPs8ijCpPvvSwYnRI3nOwar2mJiHyfhGF+Fobxx2sGU1JyIPbJBdA2ybfqa/xG67u4CRMyFSM0nHdv/To9o8VWPU6XND/fUQH9ue3S/TeF27xbk9veT5vUeZ4ztY3kOgxMYSq+v3DR1rn5MsnKtmMDaIl/U9LwRk7VRM4Cw+OeEYgsQBl5fsdCfdExoOJh8qU8dRXEAyFPmQrm0um7zmv4k6izABs5+qNmeY8uH/StD4GYu3Lgm39kC9EuRrfwezXoYr3hrssTuZW5owxwJ1OnsxUOPFn7b61ShyUkNoJghEtfcxHI3pv93W2x8uNMQjFh2DwBejxUCdFgHUIdaBbS2pt9RCmzQKmio17/95SXNvFJmIWd6Lk3He/KstnAwjb32x/XWuqc+AaZZD0opX8eJ0e+O7bnFAPZQVTZts7G4DF0a1yitXzMfljNUWIDipXM6iiDoZ5wudV/irvlHzktzKUDkgkgp0Fs72LB6ApG54pwT2tNyQr9xUG5bEzEcI+lOThduRECMJzV9qkMCPltegjRUdk68TWUhVcfJQceo6/TMKS/8iXSPry/drL9U4MaWB5kLJU7mOkbkuYLlnUPnHtG2NB95BWHA5+et3xXC0MOLXFCgjz3+I4VNIPxP2BWzQ/AaAkaawZR0U2Anc3x7+ImALWMSkWjrPaZcwiWV/FQCGKpIc+1nTwXyy/bNNccJMuQ6PHEbqEDdRgRRAl1k84fa72agLJ4dfI8GOoE8RYKiNxvKs9VUt3o2M35AlAHj3a2plG3wVqSSBlvCcweqA6cx53M01xJ4J2ME0ECZddcNSfp4i5PBHJ1cxJSF2nob+0G2P6R8FE4UiIzbgfA5g15hfdRTuDL7y0FZCCFcSfF3vb9cBeN/CIYMwgV7OOx3FU2k9Xq0kYKaimqx0bsqZS0BoNzVSJa+u12Rb+91q0eDCrIn7gEdkrBnDYWuhQnSjXoLFamw1JwmItdej7x89CLwJBQFX8nmetbDHoQ5vKdlef+Yh+KiCKKcIYHJObqZztkNtOR6GHBSA+jxSJNPm6oRLzJvV3T9r5rXQioKMs4PCvRaZ9vTF5/weRJ8Hmc9oDzpv+9K5d6mvl1/GwdNZ7KkxusI3y0NWWgFyK0FXOaUp2yIWsWQsWTklxT1+U6aaREUU/ebHjq+6Ywdai/Fa53W8vW7mIVv42FmB6+frD4XWJOj9rZKRm0n7k/DZ6IDOkGjYmajkYUja8IY3NCA1U+o1S5lBFqBHIo0io6cI6MmstRyg+VKGrrbwZ7nidgivqdo/RL8FJO2Q3bKb41HoX05T6j6mmajfWzqqfFz90lypTlNSMWlQm9z2wp3dP/8R9N/k+ojsizqFj4v8F1Q+Ujppqb/FsXSKYKmgdEAPq/WHgrfISiDBZndnVnTnNVrJ+4pX2Yltha0QHtn/U7dy+P+7KjOJK69l0za013LhJv0FsTlpfJp9TWHpPNE0pYX1B2FExKtGJiiqBY084Z981EKOXtnK2twyJ8SnZp7NOT9pT0mRV1O4VaA3GdS+RqnjmC1QKRaaaRRoMFWvAMu2LLKhH1zF8veU+G1En4SdErB2HJM8YioQLRXxefAd4L2euVJD9woPGfir5r1PcL8rBO2GGmEtfEcbP+IJjS1qMUMafeEmjpsv5A6sBlNf5WsmbCgHfNG0v91Hbs6vXcpP8CgVigfEB6WGz9Os1fJHr20mjVyzWCq+8rDYtMLAP4w7Ig2KAKu96c6/O7eycQSqEzQizoLRBS+OnOAdHDkVFrtVvd3Cr+1C+/S+DM3mie0txTzznu7JvLbkBPrM0Lgr3g2cvHdM2N7Rm4GsMnb1WdD+Kk/aEisI1ZhI8/kYrUsCC7JHGvCRQ9pCrMB+jkU48TUW54Z8/FP3T2Eyzrf1IVI9dhyztEjCSFT+RtTBthk3OZqq5Ibene62Am21dJuzK3I87ykdV5+h7MkNAaczTxJRv9YYVqaB+mug7JI+f52YdqAJtjOeg3qjd3WKuoJ8HCTtcv07lt8lohMBgM1/BidqkZbtqOWYmWuM8grYJeb/xEEpi6voQIu1MMU6XEfmyMDKui/Aj52p7ToKBa+fhUulCH13azkrVu66OStRz5H2C1RuI+ua75fdayFMtzHak2M6vFSIzUlcAPUNdsXSnrSbD7j274cCT2gr/IANTmlOvqoJM79Y3Xnr6w5vm4MIjTT20VVvOKEelfPd1biYrGEBevtEnMuzd05GO9r8Tviink2Rplnkrz0A9pYjvEEcemDcmrkl09w+quzZ6YkG0Esfjh5k4wecYfbQL9gxdiEOYdrY7eY7YHhjgseH7yrj8tEfH5dx4cCQ9ghMBKGsUzKeiRbJt8VhLvYByVmDgDBTnVueH2KBplYwutq89LvMaJU9Bi8C6qthooKVrA9uwIBclLO/N61Fg4Cj9Y+XIiHs+6jFcFfFv5L4aFB/4pJEHSoiqNH5zPnqYrdxsSVePYjpJy7O/e56Wc/XnZ75kUSIGxx0Dhimb+/yXJsUV/tOwmxiVoQcSG40pR/c8D6kWm5duiaw0K3hajM2hB+sBcg3E47WJnwA+5L1AzIfgOrrFV/HnG4jFa3YDtv0do4O6h6wK1ZTN82AFrBLdg/MpRc8NtsKTbP0MlOTyDvfPdkhJqp1qeY2fiiWqlhAy5trMWTOAs541rEk/F2zipOdXl8DV5+TKX75SVeI9uc+5/Sk111MiyK0trxWCZ3/Mw6jbLBPM/34KLl5sm2bO/rXjXPO0rsmUIJYPkNZ9PLLJcP87A7KmpmJGRCudo74bz+caNmRr3aVfUvsmbHZ02YVlCygkao+JzMSCb27A0YZyQP/Afolg3wJxQP3SIOq/aXb3Bgk/snvI4dszT3psS6fX8ZVH54Pp6O+xc9iw0j6K6juQNqMihobt7tOTGfOl2aZLP907nbXKABVmlWgJyzz6UhkmRyYg9ShMxKTCMtInxDmh/P2Sgwv3gqNbH74nW7dyhYpF6wLYzgMSVE0lS7z5WIVWoMF0mnpeQk4DGs+9ScdUKwAYl3robCdMPmTb0MLdVs3pfqcIlqYU2ASyFjTqKDMH1EmGAAV9uTc5hO9FjkK1pBLo0TDkJBDXocplqrWX9q5DwouDwBI7Bj/4JvTedfoAE5JCN8de+os0urO2TmS/QUUmZ9EPJ7rulSLpbozh2K1yYz8c7CR9qUL0ClJeKHbzciKf7STUhUNZvMHGUIMShCeiZbRaFksxM9pq+31HNEr2eXiFo/ptXgiv+1KNSGqpc3sd7wm4ij7xtpG1hv+1AMOMwdl13pXtE/BmYftD5gqtppmr0sNTTQ+vdYsKXIzTojTT44MYJ/Y3NcdCaVJbvaK4O+PRvErfVXaHA9/jMMCZw/It9rTSCuxqEBy8rp5IF2t/yyEvCtWgohekNcZF4oTlBc9pB40OJeRyTq5OEK4MOhebjB+JgXsyRympVT9urOnXZ9pvkrN4S26a4VwSYb0BrppqN6jIq0im/3PJfEHJL3+hwTTjQ+P0cplm6Sq7PDksETeB4T+B1Au1H8KcRor6LSq3ihqX1fITSfGGy37D6/a/c7R+kGN+AJsc9NV5EEL1uCYiUy4Pz1obngrxkc5v4iJmoLyMtmhkffp5iHI+3kzI61pdtRvgGdHnEhJQ8iHnG/gnSSTimRZ0LkZpABNl0XQsqeFl8yRuYAR1ecTgvJHUeNFXhy3msqYTY7o81CS80cuNVSlIqBC3laiVa99VLiTSbNwncSmtIFET6Jus6oz2RkUjj0WrXmsBcFjfZIcJDgu+PbiEcrripOXILVFn++bym+D0t03osfByrqOEHyYMUpkb7+2y/fntTX7Vij2BrVJDVPwUgAbGGsf35qIw3OOca50K4TEMqJsYt28GCq2eG8nzDNjIHlBfqs0DTKyoSBFN1NOAM4QnMNLJkcXEhLDLYoCkAY1D7Pg7+MUt70yEwX1mJdYPczlGHB+bNhKjom8mdPDmQuUgk0Tlr/4NYCO4JcXE+nYprG34hkMzQ96JRU/DHMIXLJZXygFQo9ytwg1DRRJxzecTaILaaBKXtPz8AiO8e6f2WRMsDEAtKkyyoEJlxu/vd2j60zVbtxQFlhlcC7JrYmMdB57lkS30HnfTYNCEOF6U0EUrGcUQ/GWGIhyEThiorwfi5DULMUoLGB+rwAS+vyUa1M7MTe59xP1MP24Tg2Odpx+Qx8YSwNs5yVjJi9ppdQO5Iv0AWBcKIjJiVqAnK1hJECB6+2TIOuYub5ae2h3KLtzpaXc82E6anJx9RzAiiFelS7Ngk5DSsEW7YDCYcW7fEabHipb9wFgXvTPaWeWIYyzWsJymOivZloHmb8TCLYVhtoEMKgLEhyXC5/ozvihHHzpbSx3K6kgjwpih6XhfNnfWBeHhSCu6+oP2X6R4N6pXs4AjyawVHq+l7lmR/AVImkYYBwkgCzwwKw8uMYio8SU1I1luUtIUxo586vo5qu0n6E9wMxMTCQj4iuOIfhWAUixpsYo4EV/1a27UDMx5pk/zi3NFa4mouViX+SKa6Ufw7QC/QPI4hjiPHm844ybjONJHXACq0qVHg1B1JmkZEDitxk/9OLRaP1G4Nn2UA12fAQEVfmTb0SuTyffGlkZfOpi+pyRWUYu4Gm9T9YdJNZDG63H7QXnlbSstHhvZsrJ/DzeIEzxEq5ACIVFxI87yNu7WC4sXauPIZaw3p0t+Iq1m50hLepqEjTO8kK2E7nVXxBOGvdN6NB8YG+nm9CbqrN93g/uC6tlB3/JVXgqLx9gFXh55pRNpOcjl4CgueoTAKT3mzU4b+PP9QDr8sUqW3qoRlWsm/1kKZ23QDtxPoMlG2VDOMZqU4K/O6SWJgAn3uMyABghSJEwsV5vXSZnzCqR/Sq7ff48Ydv1YlnRxVr+7NJQVx7iSjAr3yDwgYZHwS/ih2grMxPVWqAx1QaAtASf0Lj5YH2P8aEGH5A71WEYCxGWoutyUn5j2T0/Kg9Q0e6qxliRcu+V8uRQlG0HZnK9pAFPyCiUzQwBES8eQimRx4TL8dkU8Vr2hbFVLkCtETRVG7l7KjzHD2E3itdfa7ATTN5sSRvh+pLkemM6lMMMA2AIpc8UWfGAWigWYqGPFMoUGkXuju2GCqWb6eszjQJamu8yOprAS2LmvxWl325r5YSR9UQQRDgc1SMPsPxU8I7qyn6bVsM1pke7jUBi7P5cCyH80KtCYchFWRhn1fkou1OcIz1LALRnFaVGe1dOaprFmo9oE+5J2wpb7ifsukvbxbEwws2Ww+fGo2f5FAj4BaIWlHpKvdwHLahHAtGgmyAxVohdqCC0uFqfRSgSDp/QIIMqrO5O7Rch1oHM0gsR4VpCa/XAyxq1dT7X7Xtr7EG4PIrRLsbXMlhd2pFKeLTi3csdqL3IrYqW9pkwvqCGAwOg3O66xfCazYi0gUF3s3FGTpArZ4rJSqF/qethNy2NB317PnwKpNk1hzhOSQoWf5chjXV0NNBboF4//O1KD5E5wHEjUcdzBT557MR+QVYQ86OLF1UQpugm+rUBjS/LxNV79koYqlM+ApVDCEwHAmHN30lBAQt0Q0t1gWRt+ycrcq3aIPhtTiNvA9Br4tHTOJIviKOSBbLTIyuHjvU+7OWYnUEekpxFWP2HnonRb6TTvy1TeFeIecXjhdx0MBpNsF7ywob5xf9F7VOVGIPsA2uVQN8K5m1F2+CvkyYxW1jfOjqCpXb12hJKO48a3hT0ZY3l1ENQpHW8kfIdWeeEjNJxLxo6AmNfSZiB5MfQvQwiJQkJZbAX4OWtvDUOPm4SallP1CsuCbWMbxwnh9vwFK7jiKgQ+Ww92X/uTaPPmf037e/P/owpbXzw4bGtfNPScBy9f3MjSFC9kvWF4YZ3mP2mF8hDL0ZOXWsdDuACW20ZZn1TcEbgMk80WLzOTLwkWYxeVDhK/p0g9N10QxkZc+dwxU9w8F2yvfoRf38i0AYAAAA==
                " alt="Author" class="object-cover w-full h-full">
            </div>
            <div class="text-center">
                <h2 class="text-lg font-semibold text-gray-800">Danish Wani</h2>
                <p class="text-sm text-gray-600">Senior Software Developer</p>
            </div>
        </div>

        <!-- Repeat for other authors -->
        <div class="flex flex-col items-center space-y-4 md:space-y-6">
            <div class="w-32 h-32 md:w-48 md:h-48 overflow-hidden rounded-full bg-gray-200">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCgcbDpaQAWl8Nc5dczqEcqhguk_FsdBHUGQ&usqp=CAU
                " alt="Author" class="object-cover w-full h-full">
            </div>
            <div class="text-center">
                <h2 class="text-lg font-semibold text-gray-800">Nida Amin</h2>
                <p class="text-sm text-gray-600">Senior Software Developer</p>
            </div>
        </div>

        <!-- Repeat for other authors -->
        <div class="flex flex-col items-center space-y-4 md:space-y-6">
            <div class="w-32 h-32 md:w-48 md:h-48 overflow-hidden rounded-full bg-gray-200">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCb8NrR4DIcw6XXkaQ7shrqx2D1_rDUWpxag&usqp=CAU
                " alt="Author" class="object-cover w-full h-full">
            </div>
            <div class="text-center">
                <h2 class="text-lg font-semibold text-gray-800">Amit Kour</h2>
                <p class="text-sm text-gray-600">Software Development Intern</p>
            </div>
        </div>
    </div>

    <!-- About Description -->
    <div class="prose prose-lg mx-auto mt-12 text-center text-gray-800 dark:prose-dark">
        <p>
            We provide real-time connectivity to enable software providers and financial institutions to build integrated products for their small business customers.
        </p>
        <p>
            Our API infrastructure is leveraged by clients ranging from lenders to corporate card providers and business forecasting tools, with use cases including automatic reconciliation, business dashboarding, and loan decisioning.
        </p>
        <p>
            <a href="/contact" class="text-blue-500">Get in touch</a>
        </p>
    </div>
</div>

</body>
</html>

