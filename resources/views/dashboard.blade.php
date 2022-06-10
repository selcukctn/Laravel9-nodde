<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="position:absolute; width: 70%;height: 70%; display: flex;flex-direction: row;">
                    <div  style="width: 27%; height: 60%; border-width: 1px; border:solid; border-color: #1c7430;
                        margin: 50px; border-radius: 10px; justify-content:center; padding-left: 9%; padding-top: 7%;
                        ">
                        <a style="width: 100%;height: 100%" href="/createpost">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhXxliWCIjv-bxSQ8fdMOzWz7UFPT_fCXdDhyKzy3qGEwxUW5p1khUPyHg4nbV3cr4b-bd7UZ0OY-XxzL-LUxN17TGaeNlCrEdq12hxUDMWokyhj-WPfU_sCVpWv_0BSvKz3lUG3iEgyA7JIKjLC_t0vDuEXiG-2pU7mbpjctpu-suh9mOX94Rabz-Uhg/s512/notes.png"
                                 width="150px" height="150px">
                            <h2 style="margin-left: 15px; margin-top: 30px; font-size: 20px;">Not Paylaş</h2>
                        </a>
                    </div>
                    <div  style="width: 27%; height: 60%; border-width: 1px; border:solid; border-color: #1c7430;
                        margin: 50px; border-radius: 10px; justify-content:center; padding-left: 9%; padding-top: 7%;
                        ">
                        <a style="width: 100%;height: 100%" href="/sharedview">
                            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEjBk0Qd46P-C8x7syhQDobISQ9R5K8_pT2468hbqsyff03e7hckJNFcYDseqLk3_hhLjVfwj_xNczB2JfIOMxC2cA36XoGqpSjZSFvAx0zoizPWKkNHFic_qxVIeyjUK-FKgBC84NTPeMm9vNromOkxvnl4FRYKJk1WjmjoE6yufac0HJesxxdM-_sxbQ"
                                 width="150px" height="150px">
                            <h2 style="margin-left: 15px; margin-top: 30px; font-size: 20px;">Paylaştıkların</h2>
                        </a>
                    </div>
                    <div  style="width: 27%; height: 60%; border-width: 1px; border:solid; border-color: #1c7430;
                        margin: 50px; border-radius: 10px; justify-content:center; padding-left: 9%; padding-top: 7%;
                        ">
                        <a style="width: 100%;height: 100%" href="/user/profile">
                            <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEii0uwGfWGELn25MiSeJjH4vnFBYBePMHaL978dKfP2FsL6nAClIEL1wKoaLyRkQ2l3njok9CA-fcrYu3qMkg6LtmSftw_iJTtZcvG2Z8zfQI8V_kxGimGM6vWHGBclRDUWvwZrYhY_dmmEOrDBvEtQbDe_PUM3ggHbWM4goEYPTsD1iZ2_E00afRupEQ/s512/settings.png"
                                 width="150px" height="150px">
                            <h2 style="margin-left: 15px; margin-top: 30px; font-size: 20px;">Ayarlar</h2>
                        </a>
                    </div>
                </div>
            </div>
            @if(\Illuminate\Support\Facades\Auth::user()->role=='Admin')
                <button onclick="window.location.href='/admin'" style="  background-color: #4CAF50;
                position:absolute;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
    z-index: 10;
    margin-top: 30%;
    margin-left: 25%;
    width: 21%;
">Admin Panel</button>
            @endif
        </div>
    </div>
</x-app-layout>
