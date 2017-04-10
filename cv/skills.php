<?php
  class Skill {
  	public $name;
  	public $progress;
  }

  $s_java = new Skill();
  $s_java -> name = "Java";
  $s_java -> progress = 0.9;

  $s_android = new Skill();
  $s_android -> name = "Android";
  $s_android -> progress = 0.85;

  $s_html = new Skill();
  $s_html -> name = "HTML,jQuery,CSS,PHP";
  $s_html -> progress = 0.85;

  $s_spring = new Skill();
  $s_spring -> name = "MySQL";
  $s_spring -> progress = 0.75;

  $s_csharp = new Skill();
  $s_csharp -> name = "C#";
  $s_csharp -> progress = 0.65;

  $s_haskell = new Skill();
  $s_haskell -> name = "Haskell";
  $s_haskell -> progress = 0.55;

  $s_cplusplus = new Skill();
  $s_cplusplus -> name = "C++";
  $s_cplusplus -> progress = 0.50;
  
  $s_python = new Skill();
  $s_python -> name = "Python";
  $s_python -> progress = 0.40;

  $s_prolog = new Skill();
  $s_prolog -> name = "Prolog";
  $s_prolog -> progress = 0.35;

  $ss = array($s_java, $s_android, $s_html, $s_csharp, $s_haskell, $s_cplusplus, $s_python, $s_prolog);


  $sother_linux = new Skill();
  $sother_linux -> name = "UNIX based systems (Linux/OSX)";
  $sother_linux -> progress = 0.95;

  $sother_git = new Skill();
  $sother_git -> name = "VCS (Git)";
  $sother_git -> progress = 0.90;

  $sother_windows = new Skill();
  $sother_windows -> name = "Windows";
  $sother_windows -> progress = 0.85;

  $sother_hardware = new Skill();
  $sother_hardware -> name = "Hardware (maintanace)";
  $sother_hardware -> progress = 0.70;

  $sother_software = new Skill();
  $sother_software -> name = "Software (troubleshooting)";
  $sother_software -> progress = 0.70;

  $sother_junit = new Skill();
  $sother_junit -> name = "Automated Testing (gradle, cucumber)";
  $sother_junit -> progress = 0.75;

  $sother_spring = new Skill();
  $sother_spring -> name = "Continuous Deployment (Travis CI)";
  $sother_spring -> progress = 0.75;

  $sother_laravel = new Skill();
  $sother_laravel -> name = "Framework: Laravel PHP";
  $sother_laravel -> progress = 0.65;
  
  $sother_orm = new Skill();
  $sother_orm -> name = "Framework: ORM (Realm and Hibernate)";
  $sother_orm -> progress = 0.80;

  $ssother = array($sother_linux, $sother_windows, $sother_git, $sother_hardware, $sother_software, $sother_junit, $sother_spring, $sother_orm, $sother_laravel);
?>
