; <?php exit(); // DO NOT DELETE ?>
; DO NOT DELETE THE ABOVE LINE!!!
; Doing so will expose this configuration file through your web site!
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; config.inc.php (REVISED for INSTALLATION + NGINX FIX)
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

[general]

installed = On
base_url = "https://ejournal.univ-tridinanti.ac.id"

session_cookie_name = OJSSID
session_lifetime = 3600
scheduled_tasks = Off
time_zone = "UTC"

date_format_short = "%Y-%m-%d"
date_format_long = "%B %e, %Y"
datetime_format_short = "%Y-%m-%d %I:%M %p"
datetime_format_long = "%B %e, %Y - %I:%M %p"
time_format = "%I:%M %p"

; IMPORTANT FIX FOR NGINX REDIRECT LOOP
disable_path_info = On

allow_url_fopen = Off
restful_urls = Off
allowed_hosts = ''
trust_x_forwarded_for = On

citation_checking_max_processes = 3
show_upgrade_warning = On
enable_minified = On
enable_beacon = On
sitewide_privacy_statement = Off


;;;;;;;;;;;;;;;;;;;;;
; Database Settings ;
;;;;;;;;;;;;;;;;;;;;;

[database]

driver = mysql
host = localhost
username = jurnaltridinanti
password = "kGNRXFDagCiN34ZpAwP1"
name = jurnaltridinanti
debug = Off


;;;;;;;;;;;;;;;;;;
; Cache Settings ;
;;;;;;;;;;;;;;;;;;

[cache]
object_cache = none
memcache_hostname = localhost
memcache_port = 11211
web_cache = Off
web_cache_hours = 1


;;;;;;;;;;;;;;;;;;;;;;;;;
; Localization Settings ;
;;;;;;;;;;;;;;;;;;;;;;;;;

[i18n]
locale = en_US
client_charset = utf-8
connection_charset = utf8


;;;;;;;;;;;;;;;;;;
; File Settings ;
;;;;;;;;;;;;;;;;;;

[files]
files_dir = "/home/tridinanti/files"
public_files_dir = public
public_user_dir_size = 5000
umask = 0022
filename_revision_match = 70


;;;;;;;;;;;;;;;;;;;;;;;;;;;;
; Fileinfo (MIME) Settings ;
;;;;;;;;;;;;;;;;;;;;;;;;;;;;

[finfo]
; mime_database_path = /etc/magic.mime


;;;;;;;;;;;;;;;;;;;;;
; Security Settings ;
;;;;;;;;;;;;;;;;;;;;;

[security]

force_ssl = Off
force_login_ssl = Off
session_check_ip = Off
encryption = sha1
salt = "YouMustSetASecretKeyHere!!"
api_key_secret = ""
reset_seconds = 7200

allowed_html = "a[href|target|title],em,strong,cite,code,ul,ol,li[class],dl,dt,dd,b,i,u,img[src|alt],sup,sub,br,p"


;;;;;;;;;;;;;;;;;;;;
; Email Settings ;
;;;;;;;;;;;;;;;;;;;;

[email]

; SMTP off for now (can be configured later)
; smtp = Off
; smtp_server =
; smtp_port =
; smtp_auth =
; smtp_username =
; smtp_password =

time_between_emails = 3600
max_recipients = 10
require_validation = Off
validation_timeout = 14


;;;;;;;;;;;;;;;;;;;
; Search Settings ;
;;;;;;;;;;;;;;;;;;;

[search]
min_word_length = 3
results_per_keyword = 500


;;;;;;;;;;;;;;;;
; OAI Settings ;
;;;;;;;;;;;;;;;;

[oai]
oai = On
repository_id = ojs.pkp.sfu.ca
oai_max_records = 100


;;;;;;;;;;;;;;;;;;;;;;
; Interface Settings ;
;;;;;;;;;;;;;;;;;;;;;;

[interface]
items_per_page = 25
page_links = 10


;;;;;;;;;;;;;;;;;;;;;
; Captcha Settings ;
;;;;;;;;;;;;;;;;;;;;;

[captcha]
recaptcha = off
recaptcha_public_key = your_public_key
recaptcha_private_key = your_private_key
captcha_on_register = on
recaptcha_enforce_hostname = Off


;;;;;;;;;;;;;;;;;;;;;
; External Commands ;
;;;;;;;;;;;;;;;;;;;;;

[cli]
tar = /bin/tar
xslt_command = ""


;;;;;;;;;;;;;;;;;;
; Proxy Settings ;
;;;;;;;;;;;;;;;;;;

[proxy]
; http_proxy =
; https_proxy =


;;;;;;;;;;;;;;;;;;
; Debug Settings ;
;;;;;;;;;;;;;;;;;;

[debug]
show_stacktrace = Off
display_errors = Off
deprecation_warnings = Off
log_web_service_info = Off

[curl]
; cainfo = ""
