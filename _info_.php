<?
$mod_name="beef";
$mod_version="1.0";
$mod_path="/usr/share/blackbulb/www/modules/$mod_name";
$mod_logs="$log_path/$mod_name.log"; 
$mod_logs_history="$mod_path/includes/logs/";
$mod_panel="show";
$mod_type="module";
$mod_alias="BeEF";
$mod_isup="ps aux | grep -iEe 'ruby.+beef' | grep -v grep";

# OPTIONS
$mod_beef_kali="0";
$mod_beef_auto="1";

# EXEC
$bin_sudo = "/usr/bin/sudo";
$bin_beef = "$mod_path/includes/beef";
$bin_mitmproxy = "/usr/local/bin/mitmdump";
$bin_iptables = "/sbin/iptables";
$bin_ifconfig = "/sbin/ifconfig";
$bin_iwlist = "/sbin/iwlist";
$bin_sh = "/bin/sh";
$bin_echo = "/bin/echo";
$bin_grep = "/usr/bin/ngrep";
$bin_killall = "/usr/bin/killall";
$bin_cp = "/bin/cp";
$bin_chmod = "/bin/chmod";
$bin_sed = "/bin/sed";
$bin_rm = "/bin/rm";
$bin_route = "/sbin/route";
$bin_perl = "/usr/bin/perl";
$bin_sleep = "/bin/sleep";
?>
