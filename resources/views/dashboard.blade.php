<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ИнфоБелгу/Учебный процесс</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="css/adminlte.min.css">
    <link rel="stylesheet" href="css/mystyle.css">

</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{route('dash')}}" class="nav-link">Начало</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <!-- <a href="#" class="nav-link">Contact</a> -->
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Найти" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                    <i class="fas fa-th-large"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="http://www.bsu.edu.ru/bsu/" class="brand-link">
            <img src="img/gerb-m.png" alt="AdminLTE Logo" class="brand-image elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">ИнфоБелгу</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Курсенко Павел</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Найти" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <!-- <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> -->
                <ul class="nav nav-pills nav-sidebar flex-column">
                    <!-- Add icons to the links using the .nav-icon class
                       with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active accordeon">
                            <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                            <p>
                                <b>Ресурсы интрасети</b>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="http://dekanat.bsu.edu.ru/mod/forum/view.php?id=3" class="nav-link">
                                    <img src="http://dekanat.bsu.edu.ru/theme/standardold/pix/favicon.ico" alt="Forum">
                                    <!-- <i class="far fa-circle nav-icon"></i> -->
                                    <p>&nbsp; Новости сайта</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <!-- <a href="#" class="nav-link active"> -->
                                <a href="http://dekanat.bsu.edu.ru/mod/url/view.php?id=230" class="nav-link">
                                    <img src="http://dekanat.bsu.edu.ru/theme/standardold/pix/pegas.ico" style="width: 16px;"
                                         alt="Pegas">
                                    <p>&nbsp;СЭО "Пегас"</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://dekanat.bsu.edu.ru/mod/url/view.php?id=233" class="nav-link">
                                    <img src="http://dekanat.bsu.edu.ru/theme/standardold/pix/zimbra.ico" alt="Zimbra">
                                    <p>&nbsp;Почта НИУ "БелГУ"</p>
                                </a>
                            </li>
                        </ul>
                        <!-- логин -->
                        <a href="#" class="nav-link active accordeon">
                            <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                            <p>
                                <b>LOGIN</b>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="http://dean/login/index.php" class="nav-link">
                                    <p>Вход для студентов и сотрудников НИУ «БелГУ»</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://dean/login/index.php?c=1" class="nav-link">
                                    <p>Вход для других пользователей</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://dean/login/forgot_password.php" class="nav-link">
                                    <p>Забыли пароль?</p>
                                </a>
                            </li>
                            <!-- <hr style="background-color: aliceblue;"> -->
                        </ul>
                        <!-- конец логинa -->

                        <!-- oop -->
                        <a href="#" class="nav-link active accordeon">
                            <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                            <p>
                                <b>ООП</b>
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="http://dean/blocks/bsu_nabor/nabor.php" class="nav-link">
                                    <img src="http://dean/theme/image.php/standardold/core/1645106323/i/dialog" alt="ооп">
                                    <p>&nbsp;Реализация образовательных программ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="http://www.bsu.edu.ru/bsu/info/info_bsu/#sect5" class="nav-link">
                                    <img src="http://dean/theme/image.php/standardold/core/1645106323/i/table_import" alt="OOP">
                                    <p>&nbsp;Образовательные стандарты</p>
                                </a>
                            </li>
                            <!-- <hr style="background-color: aliceblue;"> -->
                        </ul>
                        <!-- end oop -->

                        <!-- calendar -->
                        <div class="nav-item calendar">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Календарь
                                    <span class="badge badge-info right"></span>
                                </p>
                            </a>
                        </div>
                        <!-- end calendar -->

                    </li>

                    <li class="nav-item">
                        <hr style="background-color: aliceblue;">
                        <a href="http://dean/mod/forum/view.php?f=2&amp;showall=1" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Другие разделы
                                <span class="right badge badge-danger">!</span>
                            </p>
                        </a>
                    </li>


                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Учебный процесс</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="starter.html">Начало</a></li>
                            <li class="breadcrumb-item active">Учебный процесс</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">

                <!-- card1 -->
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">
                            <div class="box generalbox sitetopic">
                                <ul class="section img-text">
                                    <li class="activity page modtype_page" id="module-251"><div class="mod-indent"><a href="http://dean/mod/page/view.php?id=251"><img src="http://dean/theme/image.php/standardold/page/1645106323/icon" class="activityicon" alt="Page"> <span class="instancename">Организационные инструкции по дистанционному обучению<span class="accesshide "></span></span></a></div></li>
                                    <li class="activity page modtype_page" id="module-252"><div class="mod-indent"><a href="http://dean/mod/page/view.php?id=252"><img src="http://dean/theme/image.php/standardold/page/1645106323/icon" class="activityicon" alt="Page"> <span class="instancename">Ответственные за консультирование преподавателей и студентов по использованию инструментов ЭИОС<span class="accesshide "></span></span></a></div></li>
                                    <li class="activity url modtype_url" id="module-232"><div class="mod-indent"><a href="http://dean/mod/url/view.php?id=232"><img src="http://dean/theme/image.php/standardold/core/1645106323/f/html" class="activityicon" alt="URL"> <span class="instancename">Унифицированные формы документов по организационно-нормативному регулированию учебного процесса<span class="accesshide "></span></span></a></div></li>
                                    <li class="activity url modtype_url" id="module-5"><div class="mod-indent"><a href="http://dean/mod/url/view.php?id=5"><img src="http://dean/theme/image.php/standardold/core/1645106323/f/html" class="activityicon" alt="URL"> <span class="instancename">Локальные нормативные акты по организации учебной работы<span class="accesshide "></span></span></a></div></li>
                                    <li class="activity forum modtype_forum" id="module-4"><div class="mod-indent"><a href="http://dean/mod/forum/view.php?id=4"><img src="http://dean/theme/image.php/standardold/forum/1645106323/icon" class="activityicon" alt="Forum"> <span class="instancename">Предложения по системе ИнфоБелГУ: Учебный процесс НИУ «БелГУ»<span class="accesshide "></span></span></a></div></li>
                                    <li class="activity url modtype_url" id="module-28"><div class="mod-indent"><a href="http://dean/mod/url/view.php?id=28"><img src="http://dean/theme/image.php/standardold/core/1645106323/f/html" class="activityicon" alt="URL"> <span class="instancename">Мониторинг работы "ИнфоБелГУ:Учебный процесс"<span class="accesshide "></span></span></a></div></li>
                                    <li class="activity resource modtype_resource" id="module-239"><div class="mod-indent"><a href="http://dean/mod/resource/view.php?id=239"><img src="http://dean/theme/image.php/standardold/core/1645106323/f/document" class="activityicon" alt="File"> <span class="instancename">Поля для печати дипломов и приложений.<span class="accesshide "></span></span></a><div class="contentafterlink"><div class="no-overflow"><div class="no-overflow"><p>Файл содержит поля для печати дипломов и приложений. Смотреть всем методистам перед печатью</p></div></div></div></div></li>
        </ul><!--class='section'-->
    </div>
    </p>
    <!-- <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a> -->
</div>
</div>
<!-- end card1 -->
<H3>Новости сайта</H3>
    <hr>
    <!-- card2 -->
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
                <div class="forumpost clearfix firstpost starter"><div class="row header clearfix"><div class="left picture"><a href="http://dean/user/profile.php?id=4"><img src="http://dean/theme/image.php/standardold/core/1645106323/u/f2" alt="Picture of Гальцев Олег Владимирович" title="Picture of Гальцев Олег Владимирович" class="userpicture defaultuserpic" width="35" height="35"></a></div><div class="topic firstpost starter"><div class="subject">О проведении процедуры перехода обучающихся с платного обучения на бесплатное</div><div class="author">by <a href="http://dean/user/view.php?id=4&amp;course=1">Гальцев Олег Владимирович</a> - Friday, 4 March 2022, 12:23 PM</div></div></div><div class="row maincontent clearfix"><div class="left"><div class="grouppictures">&nbsp;</div></div><div class="no-overflow"><div class="content"><div class="posting fullpost"><p><span>Уважаемые обучающиеся!</span><br><br><span>С 01.03.2022 состоится процедура перехода обучающихся с платного обучения на бесплатное.</span><br><br><span>Прием и обработка заявок и оригиналов заявлений осуществляется с</span><span>&nbsp;</span><span class="Object"><span class="Object">01 марта 2022</span></span><span>г. по</span><span>&nbsp;</span><span class="Object"><span class="Object">14 марта 2022</span></span><span>г. в МФЦ НИУ «БелГУ» (10 корпус).</span><br><br><span>Понедельник - пятница с 8.30 до 17.30.</span></p>
            <p><span class="edited">(Редактировал(а) <a href="https://dekanat.bsu.edu.ru/user/view.php?id=67543&amp;course=1">Беленко Владимир Алексеевич</a>, Пятница 25 февраля 2022, 17:56)</span></p><div class="attachedimages"></div></div></div></div></div><div class="row side"><div class="left">&nbsp;</div><div class="options clearfix"><div class="commands"></div></div></div></div>
    </p>
    </div>
    </div>
    <!-- end card2 -->

    <!-- card3 -->
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
                <div class="forumpost clearfix firstpost starter"><div class="row header clearfix"><div class="left picture"><a href="http://dean/user/profile.php?id=4"><img src="http://dean/theme/image.php/standardold/core/1645106323/u/f2" alt="Picture of Гальцев Олег Владимирович" title="Picture of Гальцев Олег Владимирович" class="userpicture defaultuserpic" width="35" height="35"></a></div><div class="topic firstpost starter"><div class="subject">Технические работы  12 02.2022. </div><div class="author">by <a href="http://dean/user/view.php?id=4&amp;course=1">Гальцев Олег Владимирович</a> - Saturday, 12 February 2022, 9:02 AM</div></div></div><div class="row maincontent clearfix"><div class="left"><div class="grouppictures">&nbsp;</div></div><div class="no-overflow"><div class="content"><div class="posting fullpost"><p><span>Уважаемые пользователи!</span></p>
            <p><span>В связи с проведением технических работ с 19.00&nbsp; 12.02 до 05.00 13.02 сайт </span></p>
            <p><span>может быть временно не доступен.&nbsp;</span></p><div class="attachedimages"></div></div></div></div></div><div class="row side"><div class="left">&nbsp;</div><div class="options clearfix"><div class="commands"></div></div></div></div>
    </p>

    </div>
    </div>
    <!-- end card3 -->

    <!-- card4 -->
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
                <div class="forumpost clearfix firstpost starter"><div class="row header clearfix"><div class="left picture"><a href="http://dean/user/profile.php?id=67543"><img src="http://dean/pluginfile.php/17343/user/icon/standardold/f2?rev=106387" alt="Picture of Беленко Владимир Алексеевич" title="Picture of Беленко Владимир Алексеевич" class="userpicture" width="35" height="35"></a></div><div class="topic firstpost starter"><div class="subject">Рейтингования НПР</div><div class="author">by <a href="http://dean/user/view.php?id=67543&amp;course=1">Беленко Владимир Алексеевич</a> - Tuesday, 28 December 2021, 2:29 PM</div></div></div><div class="row maincontent clearfix"><div class="left"><div class="grouppictures">&nbsp;</div></div><div class="no-overflow"><div class="content"><div class="posting fullpost"><p>Уважаемые коллеги!</p>
            <p>Подведение итогов рейтинга за 1-й семестр 2021-2022 учебного года будет выполнено 10.02.2022 г.</p>
            <p>&nbsp;Для эффективности получения результатов:</p>
            <ol><li>&nbsp;Внесение данных доступно (в том числе и распределения фонда заф. кафедрой) до 23:59 31.01.2022.</li>
                <li>Подтверждение данных, ввод кафедральных и институтских (факультетских) показателей доступно до 16:00 04.02.2022.</li>
                <li>Согласование итоговых значений рейтинга до 18:00 15.02.2022</li>
                <li>По вопросам заполнения критериев рейтингования можно обращаться к следующим сотрудникам университета:&nbsp;</li>
            </ol><p>&nbsp;УМР: Немцев А.Н. т. 30-14-80</p>
            <p>&nbsp;НИД: ответственный Мишунин В.В. т.30-10-30, Сиваков С.И. т. 30-14-83, Шумакова И.А. т. 30-10-35.&nbsp;</p>
            <p>&nbsp;ОВР: Варфаломеева М.И. т. 30-11-14</p>
            <p><span class="edited">(Редактировал(а) <a href="https://dekanat.bsu.edu.ru/user/view.php?id=157630&amp;course=1">Еремин Олег Александрович</a>, Пятница 24 декабря 2021, 16:30)</span></p><div class="attachedimages"></div></div></div></div></div><div class="row side"><div class="left">&nbsp;</div><div class="options clearfix"><div class="commands"></div></div></div></div>
    </p>

    </div>
    </div>
    <!-- end card4 -->

    <!-- card5 -->
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
                <div class="forumpost clearfix firstpost starter"><div class="row header clearfix"><div class="left picture"><a href="http://dean/user/profile.php?id=67543"><img src="http://dean/pluginfile.php/17343/user/icon/standardold/f2?rev=106387" alt="Picture of Беленко Владимир Алексеевич" title="Picture of Беленко Владимир Алексеевич" class="userpicture" width="35" height="35"></a></div><div class="topic firstpost starter"><div class="subject">Журналы посещаемости</div><div class="author">by <a href="http://dean/user/view.php?id=67543&amp;course=1">Беленко Владимир Алексеевич</a> - Friday, 12 November 2021, 3:21 PM</div></div></div><div class="row maincontent clearfix"><div class="left"><div class="grouppictures">&nbsp;</div></div><div class="no-overflow"><div class="content"><div class="posting fullpost"><p>Уважаемые преподаватели и старосты групп!</p>
            <p>В журналах посещаемости, не отображаются поля для ввода информации о посещаемости занятий по дисциплинам, которые реализуются с использованием массовых открытых онлайн-курсов (МООК).</p>
            <p>В расписании по таким занятиям ставится пометка МООК вместо номера аудитории.</p>
            <p>Реализация учебного процесса &nbsp;в среде МООК не предполагает одновременное изучение материалов курса по расписанию. И дает обучающимся право самостоятельно выбирать время работы в среде МООК.&nbsp;</p><div class="attachedimages"></div></div></div></div></div><div class="row side"><div class="left">&nbsp;</div><div class="options clearfix"><div class="commands"></div></div></div></div>
    </p>

    </div>
    </div>
    <!-- end card5 -->

    <!-- card6 -->
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text">
                <div class="forumpost clearfix firstpost starter"><div class="row header clearfix"><div class="left picture"><a href="http://dean/user/profile.php?id=67543"><img src="http://dean/pluginfile.php/17343/user/icon/standardold/f2?rev=106387" alt="Picture of Беленко Владимир Алексеевич" title="Picture of Беленко Владимир Алексеевич" class="userpicture" width="35" height="35"></a></div><div class="topic firstpost starter"><div class="subject">Уважаемые обучающиеся 1-го курса!</div><div class="author">by <a href="http://dean/user/view.php?id=67543&amp;course=1">Беленко Владимир Алексеевич</a> - Friday, 3 September 2021, 11:00 AM</div></div></div><div class="row maincontent clearfix"><div class="left"><div class="grouppictures">&nbsp;</div></div><div class="no-overflow"><div class="content"><div class="posting fullpost"><p>Уважаемые обучающиеся 1-го курса!</p>
            <p>В течение первого года обучения вам необходимо принести в МФЦ <br> НИУ «БелГУ», расположенный на первом этаже учебного корпуса № 10 по <br> ул. Победы, 85, следующие документы:</p>
            <ol><li>Оригинал документа о предыдущем образовании (аттестат, диплом) с приложением и нотариально заверенный перевод документа о предыдущем образовании (аттестата, диплома) с приложением в случае, если он составлен на иностранном языке<strong>.</strong></li>
                <li>Заявление о зачислении в НИУ «БелГУ», распечатанное из личного кабинета и подписанное обучающимся.</li>
                <li>Заявление - согласие на зачисление, распечатанное из личного кабинета, и подписанное обучающимся.</li>
                <li>Договор об оказании платных образовательных услуг в 2-х экземплярах, распечатанный из личного кабинета и подписанный Заказчиком и Обучающимся.</li>
            </ol><p>При себе необходимо иметь паспорт гражданина Российской Федерации или документ, удостоверяющий личность иностранного гражданина, а также его нотариально заверенный перевод на русский язык.</p>
            <p>Прием документов осуществляется в рабочие дни с 8.30 до 17.30 (услуга «Прием оригиналов документов в личное дело (1 курс)»)</p><div class="attachedimages"></div></div></div></div></div><div class="row side"><div class="left">&nbsp;</div><div class="options clearfix"><div class="commands"></div></div></div></div>
    </p>

    </div>
    </div>
    <!-- end card6 -->

    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <!--
      <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div> -->
        <nav class="mt-2 sidebar">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <!-- разное -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <p>
                            <b>Разное</b>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_other/_budget/index.php" class="nav-link">
                                <img src="http://dean/blocks/bsu_reiting/i/sofa.png" class="icon" alt="бюджет">
                                <p>&nbsp;Бюджетные места</p>
                            </a>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_other/doverennosti/index.php" class="nav-link">
                                <img src="http://dean/theme/image.php/standardold/core/1645106323/i/edit" class="icon"
                                     alt="доверенности">
                                <p>&nbsp;Актуальные доверенности НИУ БелГУ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://dekanat.bsu.edu.ru/blocks/bsu_other/area_equipments.php" class="nav-link">
                                <img src="http://dean/theme/image.php/standardold/core/1645106323/a/create_folder" class="icon"
                                     alt="оснащение">
                                <p>&nbsp;Оснащение аудиторий</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/blocks/bsu_nabor/service/index3.php?cs=7" class="nav-link">
                                <img src="http://dean/theme/image.php/standardold/core/1645106323/i/course" class="icon"
                                     alt="дистанционное">
                                <p>&nbsp;Заявки на дистанционное обучение</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="https://www.bsu.edu.ru/bsu/accreditation2020/" class="nav-link">
                                <img src="http://dean/theme/image.php/standardold/core/1645106323/a/create_folder" class="icon"
                                     alt="аккредитация">
                                <p>&nbsp;Подготовка к государственной аккредитации</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_portfolio/reestr_coursework.php" class="nav-link">
                                <img src="http://dean/theme/image.php/standardold/core/1645106323/i/addition" class="icon"
                                     alt="журналы">
                                <p>&nbsp;Журналы регистрации курсовых работ (проектов)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_portfolio/covid_employee/index.php" class="nav-link">
                                <img src="http://dean/blocks/bsu_portfolio/covid_employee/virus.png" style="width: 16px;"
                                     class="icon" alt="вакцинация">
                                <p>&nbsp;Мониторинг вакцинации сотрудников</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- конец разное -->

                <!-- личный кабинет аспиранта -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <p>
                            <b>Личный кабинет аспиранта</b>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_portfolio/Peresmotr/sendOrder.php" class="nav-link">
                                <img src="http://dean/pix/i/outcomes.gif" class="icon" alt="">
                                <p>&nbsp;Пересмотр результатов промежуточной аттестации</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- конец личный кабинет -->

                <!-- дисс совет -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <p>
                            <b>Диссертационные<br>советы</b>
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_disser/protection.php" class="nav-link">
                                <img src="http://dean/blocks/bsu_disser/i/graduation-hat.png" class="icon" alt="">
                                <p>&nbsp;НИУ "БелГУ" : Диссертационные советы</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_disser/archive.php" class="nav-link">
                                <img src="http://dean/blocks/bsu_disser/i/archive.png" class="icon" alt="" style="width: 16px;">
                                <p>&nbsp;Архив объявлений</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_disser/speciality/index.php" class="nav-link">
                                <img src="http://dean/blocks/bsu_disser/i/address-book-open.png" class="icon" alt="">
                                <p>&nbsp;Паспорта специальностей</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="http://dean/blocks/bsu_disser/order/index.php" class="nav-link">
                                <img src="http://dean/blocks/bsu_disser/i/document_16.png" class="icon" alt="">
                                <p>&nbsp;Приказы</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- конец дисс совет -->

            </ul>
        </nav>

    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="float-right d-none d-sm-inline">
            <a href="http://www.bsu.edu.ru/bsu/structure/detail.php?ID=2263">Ресурс управления образовательной политики</a>
        </div>
        <!-- Default to the left -->
        <strong>&copy; 2014-2022. Разработка и техническая поддержка: <a
                    href="mailto:DekanatAdm@bsu.edu.ru?subject=ИнфоБелГУ 2013">DekanatAdm@bsu.edu.ru</a>.</strong>
    </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/js/adminlte.min.js"></script>
    <script src="../js/myScripts.js"></script>
</body>

</html>