??    l      |  ?   ?      0	  ?   1	  ?   
  ?   ?
  ?  ?     ?    ?  ?   ?  ?  ?  U  ?  #  ?  I  ?  F  E     ?  1   ?     ?     ?  ,        8  .   X  '   ?  (   ?     ?     ?     ?     ?  *        :  ?   R  @   ?     $     ;     X     t  $   ?     ?     ?     ?     ?     ?          '  #   <     `     {  "   ?     ?     ?  &   ?     ?               0     O  )   \     ?  	  ?     ?  ;   ?  3   ?  /   ,  +   \  '   ?  #   ?     ?     ?                "  4   ?     t  "   ?  !   ?     ?  0   ?  -   "  .   P           ?     ?     ?  $   ?           #      >      V      n      ?      ?   $   ?      ?      ?      ?      !     $!     ?!  P   N!  ,   ?!  *   ?!     ?!     "     "     "     2"     L"     c"  B   s"     ?"  ?  ?"  ?   c$  ?   B%  ?   &  ?  ?&     ?(  %  ?(    *  ?  +  e  ?,  6  L.  z  ?/  L  ?0     K2  0   ^2      ?2     ?2  #   ?2     ?2  (   
3  "   33  #   V3     z3     ?3     ?3     ?3  /   ?3     ?3  ?   ?3  C   ?4     ?4     ?4     ?4     5     5     ;5     Q5     h5     w5     ?5     ?5     ?5      ?5     ?5     6     #6     A6     H6  0   \6     ?6     ?6     ?6  &   ?6  	   ?6  -   ?6     &7    =7     Q8  :   g8  2   ?8  .   ?8  +   9  &   09  "   W9     z9     ?9     ?9     ?9     ?9  6   ?9     :  %   ::  %   `:     ?:  '   ?:  +   ?:  4   ?:      ';  !   H;     j;     ?;  '   ?;     ?;     ?;     ?;     <  !   <     8<     K<  "   [<     ~<     ?<     ?<  !   ?<     ?<     ?<  H   =  $   T=  .   y=     ?=     ?=     ?=     ?=     ?=     >     (>  G   8>     ?>     N           2       :   I   (           0              b   [       M      X         C   4           a   5      >   S   Q         E      g   7          '       i         +   6                       *   #           A   3       f          P   \       O   e           <   L   l   %   .   
   /      H   )             B   	         W       Y   F       c       d      D   ?   =       k          Z   ;         U       -   ^   !   K          V      T   ,   "          ]           _       R   8             &      `       h       @      J   1       $   G   9   j            
Context control:
  -B, --before-context=NUM  print NUM lines of leading context
  -A, --after-context=NUM   print NUM lines of trailing context
  -C, --context=NUM         print NUM lines of output context
 
License GPLv3+: GNU GPL version 3 or later <https://gnu.org/licenses/gpl.html>.
This is free software: you are free to change and redistribute it.
There is NO WARRANTY, to the extent permitted by law.

 
Miscellaneous:
  -s, --no-messages         suppress error messages
  -v, --invert-match        select non-matching lines
  -V, --version             display version information and exit
      --help                display this help text and exit
 
Output control:
  -m, --max-count=NUM       stop after NUM selected lines
  -b, --byte-offset         print the byte offset with output lines
  -n, --line-number         print line number with output lines
      --line-buffered       flush output on every line
  -H, --with-filename       print file name with output lines
  -h, --no-filename         suppress the file name prefix on output
      --label=LABEL         use LABEL as the standard input file name prefix
 
Report bugs to: %s
       --include=GLOB        search only files that match GLOB (a file pattern)
      --exclude=GLOB        skip files and directories matching GLOB
      --exclude-from=FILE   skip files matching any file pattern from FILE
      --exclude-dir=GLOB    skip directories that match GLOB
   -E, --extended-regexp     PATTERNS are extended regular expressions
  -F, --fixed-strings       PATTERNS are strings
  -G, --basic-regexp        PATTERNS are basic regular expressions
  -P, --perl-regexp         PATTERNS are Perl regular expressions
   -I                        equivalent to --binary-files=without-match
  -d, --directories=ACTION  how to handle directories;
                            ACTION is 'read', 'recurse', or 'skip'
  -D, --devices=ACTION      how to handle devices, FIFOs and sockets;
                            ACTION is 'read' or 'skip'
  -r, --recursive           like --directories=recurse
  -R, --dereference-recursive  likewise, but follow all symlinks
   -L, --files-without-match  print only names of FILEs with no selected lines
  -l, --files-with-matches  print only names of FILEs with selected lines
  -c, --count               print only a count of selected lines per FILE
  -T, --initial-tab         make tabs line up (if needed)
  -Z, --null                print 0 byte after FILE name
   -NUM                      same as --context=NUM
      --color[=WHEN],
      --colour[=WHEN]       use markers to highlight the matching strings;
                            WHEN is 'always', 'never', or 'auto'
  -U, --binary              do not strip CR characters at EOL (MSDOS/Windows)

   -e, --regexp=PATTERNS     use PATTERNS for matching
  -f, --file=FILE           take PATTERNS from FILE
  -i, --ignore-case         ignore case distinctions
  -w, --word-regexp         match only whole words
  -x, --line-regexp         match only whole lines
  -z, --null-data           a data line ends in 0 byte, not newline
   -o, --only-matching       show only nonempty parts of lines that match
  -q, --quiet, --silent     suppress all normal output
      --binary-files=TYPE   assume that binary files are TYPE;
                            TYPE is 'binary', 'text', or 'without-match'
  -a, --text                equivalent to --binary-files=text
 %s home page: <%s>
 %s home page: <https://www.gnu.org/software/%s/>
 %s%s argument '%s' too large %s: invalid option -- '%c'
 %s: option '%s%s' doesn't allow an argument
 %s: option '%s%s' is ambiguous
 %s: option '%s%s' is ambiguous; possibilities: %s: option '%s%s' requires an argument
 %s: option requires an argument -- '%c'
 %s: unrecognized option '%s%s'
 ' (C) (standard input) -P supports only unibyte and UTF-8 locales Binary file %s matches
 Example: %s -i 'hello world' menu.h main.c
PATTERNS can contain multiple patterns separated by newlines.

Pattern selection and interpretation:
 General help using GNU software: <https://www.gnu.org/gethelp/>
 Invalid back reference Invalid character class name Invalid collation character Invalid content of \{\} Invalid preceding regular expression Invalid range end Invalid regular expression Memory exhausted No match No previous regular expression Packaged by %s
 Packaged by %s (%s)
 Premature end of regular expression Regular expression too big Report %s bugs to: %s
 Search for PATTERNS in each FILE.
 Success Trailing backslash Try '%s --help' for more information.
 Unknown system error Unmatched ( or \( Unmatched ) or \) Unmatched [, [^, [:, [., or [= Unmatched \{ Usage: %s [OPTION]... PATTERNS [FILE]...
 Valid arguments are: When FILE is '-', read standard input.  With no FILE, read '.' if
recursive, '-' otherwise.  With fewer than two FILEs, assume -h.
Exit status is 0 if any line (or file if -L) is selected, 1 otherwise;
if any error occurs and -q is not given, the exit status is 2.
 Written by %s and %s.
 Written by %s, %s, %s,
%s, %s, %s, %s,
%s, %s, and others.
 Written by %s, %s, %s,
%s, %s, %s, %s,
%s, and %s.
 Written by %s, %s, %s,
%s, %s, %s, %s,
and %s.
 Written by %s, %s, %s,
%s, %s, %s, and %s.
 Written by %s, %s, %s,
%s, %s, and %s.
 Written by %s, %s, %s,
%s, and %s.
 Written by %s, %s, %s,
and %s.
 Written by %s, %s, and %s.
 Written by %s.
 ` ambiguous argument %s for %s character class syntax is [[:space:]], not [:space:] conflicting matchers specified exceeded PCRE's backtracking limit exceeded PCRE's line length limit exhausted PCRE JIT stack failed to allocate memory for the PCRE JIT stack failed to return to initial working directory failed to set file descriptor text/binary mode input file %s is also the output input is too large to count internal PCRE error: %d internal error internal error (should never happen) invalid %s%s argument '%s' invalid argument %s for %s invalid character class invalid content of \{\} invalid context length argument invalid matcher %s invalid max count invalid suffix in %s%s argument '%s' memory exhausted no syntax specified program error recursive directory loop regular expression too big stack overflow support for the -P option is not compiled into this --disable-perl-regexp binary the -P option only supports a single pattern unable to record current working directory unbalanced ( unbalanced ) unbalanced [ unfinished \ escape unknown binary-files type unknown devices method warning: %s: %s warning: GREP_OPTIONS is deprecated; please use an alias or script write error Project-Id-Version: grep 3.1.48
Report-Msgid-Bugs-To: bug-grep@gnu.org
POT-Creation-Date: 2018-12-20 20:39-0800
PO-Revision-Date: 2018-12-16 11:02+0200
Last-Translator: Toomas Soome <tsoome@me.com>
Language-Team: Estonian <linux-ee@lists.eenet.ee>
Language: et
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8-bit
X-Bugs: Report translation errors to the Language-Team address.
 
Konteksti kontroll:
  -B, --before-context=NUM  väljasta NUM rida eelnevat konteksti
  -A, --after-context=NUM   väljasta NUM rida järgnevat konteksti
  -C, --context=NUM         väljasta NUM rida väljundi konteksti
 
Litsents GPLv3+: GNU GPL versioon 3 või uuem <https://gnu.org/licenses/gpl.html>
See on vaba tarkvara: teil on lubatud seda muuta ja levitada.
Garantii PUUDUB; vastavalt seadustega lubatud piiridele.
 
Muud:
  -s, --no-messages         blokeeri veateated
  -v, --invert-match        vali mitte-sobivad read
  -V, --version             esita versiooniinfo ja lõpeta töö
      --help                esita see abiinfo ja lõpeta töö

 
Väljundi kontroll:
  -m, --max-count=NUM       peatu peale NUM rida
  -b, --byte-offset         väljasta koos ridadega ka baidi indeks
  -n, --line-number         väljasta koos ridadega ka reanumber
      --line-buffered       tühjenda väljund igal real
  -H, --with-filename       väljasta iga leiuga failinimi
  -h, --no-filename         blokeeri väljundis failinimi
      --label=MÄRGEND       kasuta väljundis failinime asemel märgendit
 
Teatage palun vigadest: %s
       --include=FAILI_MUSTER  otsi alinult mustrile vastavaid faile
      --exclude=FAILI_MUSTER  välista mustrile vastavad failid ja kataloogid
      --exclude-from=FAIL    välista failid vastavalt failist loetud mustrile
      --exclude-dir=MUSTER   välista mustrile vastavad kataloogid.
   -E, --extended-regexp     MUSTRID on laiendatud regulaaravaldised
  -F, --fixed-strings       MUSTRID on hulk reavahetustega eraldatud sõnesid
  -G, --basic-regexp        MUSTRID on lihtsad regulaaravaldised (vaikimisi)
  -P, --perl-regexp         MUSTRID on Perl regulaaravaldised
   -I                        sama, kui --binary-files=without-match
  -d, --directories=TEGEVUS kuidas käsitleda katalooge;
                            TEGEVUS on 'read', 'recurse' või 'skip'
  -D, --devices=TEGEVUS     kuidas käsitleda seadmeid, FIFOsid ja pistikuid;
                            TEGEVUS on 'read' või 'skip'
  -r, --recursive           sama, kui --directories=recurse
  -R                        sama, aga järgib kõiki nimeviiteid
   -L, --files-without-match  väljasta ainult failide nimed, mis ei sobinud
  -l, --files-with-matches  väljasta ainult leitud failide nimed
  -c, --count               väljasta ainult leitud ridade arv faili kohta
  -T, --initial-tab         kasuta vajadusel ridade joondamisel tabulaatorit
  -Z, --null                väljasta faili nime järel bait 0
   -NUM                      sama, kui --context=NUM
      --color[=MILLAL],
      --colour[=MILLAL]     kasuta otsitava sõne eristamiseks markereid
                            MILLAL võib olla 'always', 'never' või 'auto'.
  -U, --binary              ära eemalda rea lõpust CR sümboleid (MSDOS/WINDOWS)

   -e, --regexp=MUSTER       kasuta regulaaravaldistena
  -f, --file=FAIL           loe MUSTRID failist FAIL
  -i, --ignore-case         ignoreeri suur- ja väiketähtede erinevusi
  -w, --word-regexp         kasuta MUSTRIT sõnade leidmiseks
  -x, --line-regexp         kasuta MUSTRIT ridade leidmiseks
  -z, --null-data           andmerida lõppeb baidil 0, mitte reavahetusel
   -o, --only-matching       näita ainult mustriga sobivat mittetühja reaosa
  -q, --quiet, --silent     blokeeri kogu tavaline väljund
      --binary-files=TÜÜP   eelda binaarfailide tüüpi;
                            TÜÜP on 'binary', 'text', või 'without-match'
  -a, --text                sama, kui --binary-files=text
 %s koduleht: <%s>
 %s koduleht: <https://www.gnu.org/software/%s/>
 %s%s argument '%s' on liiga suur %s: vigane võti -- '%c'
 %s: võti '%s%s' ei luba argumenti
 %s: võti '%s%s' on segane
 %s: võti '%s%s' on segane; võimalused: %s: võti '%s%s' nõuab argumenti
 %s: võti nõuab argumenti -- '%c'
 %s: tundmatu võti '%s%s'
 ' © (standardsisend) -P toetab ainult ühebaidilisi ja UTF-8 lokaate Kahendfail %s sobib
 Näiteks: %s -i 'tere kõik' menu.h main.c
MUSTRID võivad sisaldada mitut reavahetusega eraldatud mustrit.

Mustri valik ja interpreteerimine:
 Üldine abiinfo GNU tarkvara kohta: <https://www.gnu.org/gethelp/>
 Vigane tagasi viide Vigane sümbolklassi nimi Vigane sortimise sümbol Vigane \{\} sisu Vigane eelnev regulaaravaldis Vigane vahemiku lõpp Vigane regulaaravaldis Mälu on otsas Vastet pole Eelnevat regulaaravaldist pole Pakendanud %s
 Pakendanud %s (%s)
 Ootamatu reagulaaravaldise lõpp Regulaaravaldis on liiga suur Teatage palun %s vigadest: %s
 Otsi MUSTREID igast FAIList.
 Edukas Lõpetav langkriips Lisainfo saamiseks proovige võtit '%s --help'.
 Tundmatu süsteemi viga Puudub ( või \( Puudub ) või \) Puudub [, [^, [:, [. või [= paariline Puudub \{ Kasutamine: %s [VÕTI]... MUSTRID [FAIL] ...
 Lubatud argumendid on: Kui fail on '-', loe standardsisendit. Kui faili ei antud ja kasutati võtit -r,
loe '.', muidu '-'. Kui anti vähem kui kaks faili, eelda -h. 
Lõpetamise kood on 0, kui rida (või fail võtmega -L) leiti, muidu 1;
kui tekkis viga ja -q ei kasutatud, on lõpetamise kood 2.
 Kirjutanud %s ja %s.
 Kirjutanud %s, %s, %s,
%s, %s, %s, %s,
%s, %s, ja teised.
 Kirjutanud %s, %s, %s,
%s, %s, %s, %s,
%s, ja %s.
 Kirjutanud %s, %s, %s,
%s, %s, %s, %s,
ja %s.
 Kirjuatanud %s, %s, %s,
%s, %s, %s, ja %s.
 Kirjutanud %s, %s, %s,
%s, %s, ja %s.
 Kirjutanud %s, %s, %s,
%s, ja %s.
 Kirjutanud %s, %s, %s,
ja %s.
 Kirjutanud %s, %s, ja %s.
 Kirjutanud %s.
 ` segane argument %s võtmele %s sümbolklassi süntaks on [[:space:]], mitte [:space:] määrati konfliktsed otsijad PCRE tagasivaate piirang on ületatud PCRE rea pikkuse piirang on ületatud PCRE JIT pinu sai täis PCRE JIT magasini jaoks ei jätku mälu algsesse töökataloogi ei saa tagasi minna failipideme tekst/binaar moodi muutmine ebaõnnestus sisendfail %s on samuti väljund sisend on loendamiseks liiga suur sisemine PCRE viga: %d sisemine viga sisemine viga (ei peaks kunagi juhtuma) vigane %s%s argument '%s' vigane argument %s võtmele %s vigane sümboliklass vigane \{\} sisu vigane konteksti pikkuse argument vigane sobitaja %s vigane maksimum vigane sufiks %s%s argumendis '%s' mälu on otsas süntaksit pole määratud programmi viga rekursiivne kataloogipuu tsükkel regulaaravaldis on liiga suur pinu ületäitumine võtme -P tuge ei ole kompileeritud sellesse --disable-perl-regexp koodi võti -P toetab ainult ühte mustrit ei õnnestu salvestada jooksvat töökataloogi balanseerimata ( balanseerimata ) balanseerimata [ lõpetamata \ paojada tundmatu kahendfailide tüüp tundmatu seadmete meetod hoiatus: %s: %s hoiatus: GREP_OPTIONS pole soovitatav; kasutage palun alias või script viga kirjutamisel 