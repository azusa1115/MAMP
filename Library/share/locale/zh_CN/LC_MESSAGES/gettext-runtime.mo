Þ    .        =   ü      ð  8   ñ  B   *  A   m  6   ¯  H   æ  I   /  F   y  9   À  7   ú  6   2  M   i  L   ·  O     H   T  {          ,   5     b  .     '   ±  (   Ù     	     "	  e   /	  :   	    Ð	  Þ  ê
    É     \     q  1     &   ´     Û     ê  "   ÿ  9   "  I   \     ¦     D     T     m     ~               ²  ×  ¾  8     :   Ï  :   
  9   E  I     I   É  D     7   X  7     5   È  D   þ  >   C  V     I   Ù  \   #       (        Ã  -   ã  "     %   4  %   Z       R     .   à  
    ¶    O  Ñ     !     5     F  .   c          ¡  #   ·  ;   Û  K        c     ô               +     ;     H  	   U                              &   %                     .                 -       !                             *   
                "                ,   	   $          +   #   )                (       '                 -E                        (ignored for compatibility)
   -V, --version               output version information and exit
   -V, --version             display version information and exit
   -c, --context=CONTEXT     specify context for MSGID
   -d, --domain=TEXTDOMAIN   retrieve translated message from TEXTDOMAIN
   -d, --domain=TEXTDOMAIN   retrieve translated messages from TEXTDOMAIN
   -e                        enable expansion of some escape sequences
   -h, --help                  display this help and exit
   -h, --help                display this help and exit
   -n                        suppress trailing newline
   -v, --variables             output the variables occurring in SHELL-FORMAT
   COUNT                     choose singular/plural form based on this value
   MSGID MSGID-PLURAL        translate MSGID (singular) / MSGID-PLURAL (plural)
   [TEXTDOMAIN]              retrieve translated message from TEXTDOMAIN
   [TEXTDOMAIN] MSGID        retrieve translated message corresponding
                            to MSGID from TEXTDOMAIN
 %s: invalid option -- '%c'
 %s: option '%s%s' doesn't allow an argument
 %s: option '%s%s' is ambiguous
 %s: option '%s%s' is ambiguous; possibilities: %s: option '%s%s' requires an argument
 %s: option requires an argument -- '%c'
 %s: unrecognized option '%s%s'
 Bruno Haible Display native language translation of a textual message whose grammatical
form depends on a number.
 Display native language translation of a textual message.
 If the TEXTDOMAIN parameter is not given, the domain is determined from the
environment variable TEXTDOMAIN.  If the message catalog is not found in the
regular directory, another location can be specified with the environment
variable TEXTDOMAINDIR.
Standard search directory: %s
 If the TEXTDOMAIN parameter is not given, the domain is determined from the
environment variable TEXTDOMAIN.  If the message catalog is not found in the
regular directory, another location can be specified with the environment
variable TEXTDOMAINDIR.
When used with the -s option the program behaves like the 'echo' command.
But it does not simply copy its arguments to stdout.  Instead those messages
found in the selected catalog are translated.
Standard search directory: %s
 In normal operation mode, standard input is copied to standard output,
with references to environment variables of the form $VARIABLE or ${VARIABLE}
being replaced with the corresponding values.  If a SHELL-FORMAT is given,
only those environment variables that are referenced in SHELL-FORMAT are
substituted; otherwise all environment variables references occurring in
standard input are substituted.
 Informative output:
 Operation mode:
 Substitutes the values of environment variables.
 Try '%s --help' for more information.
 Ulrich Drepper Unknown system error Usage: %s [OPTION] [SHELL-FORMAT]
 Usage: %s [OPTION] [TEXTDOMAIN] MSGID MSGID-PLURAL COUNT
 Usage: %s [OPTION] [[TEXTDOMAIN] MSGID]
or:    %s [OPTION] -s [MSGID]...
 When --variables is used, standard input is ignored, and the output consists
of the environment variables that are referenced in SHELL-FORMAT, one per line.
 Written by %s.
 error while reading "%s" memory exhausted missing arguments standard input too many arguments write error Project-Id-Version: gettext-runtime 0.20-rc1
Report-Msgid-Bugs-To: bug-gettext@gnu.org
PO-Revision-Date: 2019-04-14 13:29-0400
Last-Translator: Boyuan Yang <073plan@gmail.com>
Language-Team: Chinese (simplified) <i18n-zh@googlegroups.com>
Language: zh_CN
MIME-Version: 1.0
Content-Type: text/plain; charset=utf-8
Content-Transfer-Encoding: 8bit
Plural-Forms: nplurals=1; plural=0;
X-Bugs: Report translation errors to the Language-Team address.
X-Generator: Poedit 2.2.1
   -E                        ï¼ä¸ºå¼å®¹æ§èå¿½ç¥ï¼
   -V, --version               è¾åºçæ¬ä¿¡æ¯å¹¶éåº
   -V, --version               è¾åºçæ¬ä¿¡æ¯å¹¶éåº
   -c, --context=ä¸ä¸æ      æå® MSGID çä¸ä¸æ
   -d, --domain=ææ¬å       ä»æå®<ææ¬å>è·åå·²ç¿»è¯æ¶æ¯
   -d, --domain=ææ¬å       ä»æå®<ææ¬å>è·åå·²ç¿»è¯æ¶æ¯
   -e                        å¯ç¨å¯¹æäºè½¬ä¹åºåè¿è¡å±å¼
   -h, --help                  æ¾ç¤ºæ­¤å¸®å©å¹¶éåº
   -h, --help                  æ¾ç¤ºæ­¤å¸®å©å¹¶éåº
   -n                        å»é¤æ«å°¾çæ¢è¡ç¬¦
   -v, --variables             è¾åº SHELLæ ¼å¼ ä¸­åºç°çåé
   COUNT                     åºäºæ­¤å¼éæ©åå¤æ°å½¢å¼
   MSGID MSGID-PLURAL        ç¿»è¯ MSGID (åæ°å½¢å¼) / MSGID-PLURAL (å¤æ°å½¢å¼)
   [ææ¬å]                  ä»æå®<ææ¬å>è·åå·²ç¿»è¯æ¶æ¯
   [ææ¬å] MSGID            ä»æå®<ææ¬å>è·åå¯¹åºäº MSGID çå·²ç¿»è¯æ¶æ¯
 %sï¼æ æéé¡¹ â %c
 %sï¼éé¡¹â%s%sâä¸åè®¸å¸¦åæ°
 %sï¼éé¡¹â%s%sâææ­§ä¹
 %sï¼éé¡¹â%s%sâææ­§ä¹ï¼å¯è½æ¯ï¼ %sï¼éé¡¹â%s%sâéè¦åæ°
 %sï¼éé¡¹éè¦ä¸ä¸ªåæ° â %c
 %sï¼æ æ³è¯å«çéé¡¹â%s%sâ
 Bruno Haible æ¾ç¤ºæåææ¶æ¯çæ¬å°è¯­è¨ç¿»è¯ï¼èç¿»è¯çè¯­æ³åæ°å­æå³ã
 æ¾ç¤ºæåææ¶æ¯çæ¬å°è¯­è¨ç¿»è¯ã
 åå¦æ²¡ææå®<ææ¬å>åæ°ï¼ç¨åºä¼æ ¹æ® TEXTDOMAIN ç¯å¢åéæ¥è®¾å®ææ¬åã
åå¦æ¶æ¯ä¸è§è¡¨æä»¶ä¸å¨æ­£å¸¸çç®å½ä¸ï¼å¯ä»¥ç¨ç¯å¢åé TEXTDOMAINDIR æå®
æ¶æ¯ä¸è§è¡¨æä»¶æå¨çä½ç½®ã
æ åçæç´¢ç®å½ä¸ºï¼%s
 åå¦æ²¡ææå®<ææ¬å>åæ°ï¼ç¨åºä¼æ ¹æ® TEXTDOMAIN ç¯å¢åéæ¥è®¾å®<ææ¬å>ã
åå¦æ¶æ¯ä¸è§è¡¨æä»¶ä¸å¨æ­£å¸¸çç®å½ä¸ï¼å¯ä»¥ç¨ç¯å¢åé TEXTDOMAINDIR æå®
æ¶æ¯ä¸è§è¡¨æä»¶æå¨çä½ç½®ã
ä½¿ç¨éé¡¹â-sâæ¶æ­¤ç¨åºåâechoâå½ä»¤ç±»ä¼¼ãä½å®ä¸æ¯ç´æ¥æåæ°å¤å¶è³æ å
è¾åºï¼èæ¯å¯»æ¾æ¶æ¯ä¸è§è¡¨æä»¶éç¿»è¯è¿çæ¶æ¯ã
æ åçæç´¢ç®å½ä¸ºï¼%s
 å¨æ®éæä½æ¨¡å¼ä¸ï¼ä¼å°æ åè¾å¥å¤å¶å°æ åè¾åºä¸­ï¼èä»¥ $VARIABLE æ ${VARIABLE}
æ ¼å¼ç»åºçç¯å¢åéå¼ç¨ä¼è¢«æ¿æ¢æç¸åºçå¼ãå¦æç»åºäº SHELLæ ¼å¼ï¼ååªæå¨è¯¥æ ¼å¼
ä¸­å¼ç¨çç¯å¢åéä¼è¢«æ¿æ¢ï¼å¦åï¼æ åè¾å¥ä¸­åºç°çå¨é¨ç¯å¢åéå¼ç¨é½å°è¢«æ¿æ¢ã
 ä¿¡æ¯æ§è¾åºï¼
 æä½æ¨¡å¼ï¼
 æ¿æ¢ç¯å¢åéçå¼ã
 è¯è¯â%s --helpâæ¥è·åæ´å¤ä¿¡æ¯ã
 Ulrich Drepper æªç¥çç³»ç»éè¯¯ ç¨æ³ï¼%s [éé¡¹] [SHELLæ ¼å¼]
 ç¨æ³ï¼%s [éé¡¹] [ææ¬å] MSGID å¤æ°-MSGID æ°å­
 ç¨æ³ï¼%s [éé¡¹] [[ææ¬å] MSGID]
æï¼  %s [éé¡¹] -s [MSGID]...
 è¥ä½¿ç¨äº --variablesï¼åä¼å¿½ç¥æ åè¾å¥ï¼èè¾åºç± SHELLæ ¼å¼ å¼ç¨çç¯å¢åéç»æï¼
æ¯è¡åºç°ä¸ä¸ªç¯å¢åéã
 ç± %s ç¼åã
 è¯»åâ%sâæ¶åºé åå­èå°½ ç¼ºå°äºåæ° æ åè¾å¥ åæ°è¿å¤ åéè¯¯ 