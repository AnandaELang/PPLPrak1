<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
    <div class="contianer-fluid">
        <div class="row">
            <div class="col-md-2 flex-shrink-0 p-0 sidebar-wrapper">
                <div class="sidebar">
                    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none">
                        <div class="logo">
                            <img src="/assets/img/logo.png" alt="Logo">
                            <h3>PPL</h3>
                        </div>
                    </a>
                    <div class="sidebar-content">
                        <ul class="list-unstyled ps-0">
                            <li class="mb-1 px-2">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#pemetaan-collapse" aria-expanded="true">
                                    <img src="/assets/icons/cog.png" class="menu" alt="Cog">Pemetaan </button>
                                <div class="collapse show" id="pemetaan-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li>
                                            <a href="#" class="link-dark rounded link-active">BK-MK</a>
                                        </li>
                                        <li>
                                            <a href="#" class="link-dark rounded">CPL-BK</a>
                                        </li>
                                        <li>
                                            <a href="#" class="link-dark rounded">CPL-BK-MK</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1 px-2">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#bahan-kajian-collapse" aria-expanded="false">
                                    <img src="/assets/icons/folder.png" class="menu" alt="Cog">Bahan Kajian </button>
                                <div class="collapse" id="bahan-kajian-collapse"></div>
                            </li>
                            <li class="mb-1 px-2">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#mata-kuliah-collapse" aria-expanded="false">
                                    <img src="/assets/icons/file.png" class="menu" alt="Cog">Mata Kuliah </button>
                                <div class="collapse" id="mata-kuliah-collapse"></div>
                            </li>
                            <li class="mb-1 px-2">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#profil-lulusan-collapse" aria-expanded="false">
                                    <img src="/assets/icons/screen.png" class="menu" alt="Cog">Profil Lulusan </button>
                                <div class="collapse" id="profil-lulusan-collapse"></div>
                            </li>
                            <li class="mb-1 px-2">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#cpl-collapse" aria-expanded="false">
                                    <img src="/assets/icons/chevron.png" class="menu" alt="Cog">CPL </button>
                                <div class="collapse" id="cpl-collapse"></div>
                            </li>
                            <li class="mb-1 px-2">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#cpmk-collapse" aria-expanded="false">
                                    <img src="/assets/icons/chevron.png" class="menu" alt="Cog">CPMK </button>
                                <div class="collapse" id="cpmk-collapse"></div>
                            </li>
                        </ul>
                        <div class="profile-wrapper">
                            <hr class="border-style">
                            <div class="profile">
                                <img src="/assets/img/profile.png" alt="Profile Picture">
                                <div class="profile-name">
                                    <p>Sugeng Alexander</p>
                                    <a href="">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="col-md-10 p-0 main">
                <div class="breadcrumb">
                    <span>BK-MK</span>
                </div>
                <div class="content">
                    <h3 style="font-weight:800">Bahan Kajian - Mata Kuliah</h3>
                    <p>Pemetaan antara Bahan Kajian terhadap Mata Kuliah</p>
                    <a href="{{ url('/edit-matakuliah') }}" class="btn btn-custom-blue mt-5">Edit</a>
                    <table border="1" class="mt-2">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode MK</th>
                                <th>Nama MK</th>
                                <th>BK1</th>
                                <th>BK2</th>
                                <th>BK3</th>
                                <th>BK4</th>
                                <th>BK5</th>
                                <th>BK6</th>
                                <th>BK7</th>
                                <th>BK8</th>
                                <th>BK9</th>
                                <th>BK10</th>
                                <th>BK11</th>
                                <th>BK12</th>
                                <th>BK13</th>
                                <th>BK14</th>
                                <th>BK15</th>
                                <th>BK16</th>
                                <th>BK17</th>
                                <th>BK18</th>
                                <th>BK19</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AGH01</td>
                                <td>Agama I (Hindu)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>SII213</td>
                                <td>Inovasi Sistem Informasi dan Teknologi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>BAE112</td>
                                <td>Bahasa Inggris II</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>SIS309</td>
                                <td>Keamanan Sistem Informasi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>MNW401</td>
                                <td>Kewirausahaan dan Bisnis Sistem Informasi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>SII208</td>
                                <td>Desain Interaksi</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>SII209</td>
                                <td>Desain Interaksi (Praktikum)</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>SII318</td>
                                <td>Pembangunan Perangkat Lunak</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <span class="item"></span>
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>