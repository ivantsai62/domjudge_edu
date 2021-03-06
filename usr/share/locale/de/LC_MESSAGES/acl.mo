??    2      ?  C   <      H     I     ]     q     ?     ?  )   ?  )   ?       ?   $  7  ?  B   (  l  k  ?   ?  '   ]	  '   ?	     ?	  $   ?	     ?	  &   
  2   .
  3   a
  /   ?
  /   ?
  =   ?
     3  %   N  2   t     ?  $   ?  &   ?  +     '   7  ,   _  &   ?  '   ?  *   ?  +        2     I     a     s     ?     ?  &   ?     ?     ?     ?          0  ]  K     ?     ?     ?     ?       +     +   G     s  ?   ?  9  >  4   x  q  ?  u     5   ?  4   ?         '   !     I  /   a  8   ?  7   ?  5     5   8  E   n     ?  "   ?  3   ?     *  )   C  3   m  @   ?  2   ?  ?     4   U  3   ?  8   ?  7   ?  "   /  #   R     v     ?     ?     ?  /   ?               1  #   M  !   q            '      $      /            +   1      *   0                  -           )         	                        %       2         .   &   (            
                                 "                  !                ,       #    	%s -B pathname...
 	%s -D pathname...
 	%s -R pathname...
 	%s -b acl dacl pathname...
 	%s -d dacl pathname...
 	%s -l pathname...	[not IRIX compatible]
 	%s -r pathname...	[not IRIX compatible]
 	%s acl pathname...
       --set=acl           set the ACL of file(s), replacing the current ACL
      --set-file=file     read ACL entries to set from file
      --mask              do recalculate the effective rights mask
   -R, --recursive         recurse into subdirectories
  -L, --logical           logical walk, follow symbolic links
  -P, --physical          physical walk, do not follow symbolic links
      --restore=file      restore ACLs (inverse of `getfacl -R')
      --test              test mode (ACLs are not modified)
   -d, --default           display the default access control list
   -m, --modify=acl        modify the current ACL(s) of file(s)
  -M, --modify-file=file  read ACL entries to modify from file
  -x, --remove=acl        remove entries from the ACL(s) of file(s)
  -X, --remove-file=file  read ACL entries to remove from file
  -b, --remove-all        remove all extended ACL entries
  -k, --remove-default    remove the default ACL
   -n, --no-mask           don't recalculate the effective rights mask
  -d, --default           operations apply to the default ACL
 %s %s -- get file access control lists
 %s %s -- set file access control lists
 %s: %s in line %d of file %s
 %s: %s in line %d of standard input
 %s: %s: %s in line %d
 %s: %s: Cannot change owner/group: %s
 %s: %s: Malformed access ACL `%s': %s at entry %d
 %s: %s: Malformed default ACL `%s': %s at entry %d
 %s: %s: No filename found in line %d, aborting
 %s: %s: Only directories can have default ACLs
 %s: No filename found in line %d of standard input, aborting
 %s: Option -%c incomplete
 %s: Option -%c: %s near character %d
 %s: Removing leading '/' from absolute path names
 %s: Standard input: %s
 %s: access ACL '%s': %s at entry %d
 %s: cannot get access ACL on '%s': %s
 %s: cannot get access ACL text on '%s': %s
 %s: cannot get default ACL on '%s': %s
 %s: cannot get default ACL text on '%s': %s
 %s: cannot set access acl on "%s": %s
 %s: cannot set default acl on "%s": %s
 %s: error removing access acl on "%s": %s
 %s: error removing default acl on "%s": %s
 %s: malloc failed: %s
 %s: opendir failed: %s
 Duplicate entries Invalid entry type Missing or wrong entry Multiple entries of same type Try `%s --help' for more information.
 Usage:
 Usage: %s %s
 Usage: %s [-%s] file ...
 preserving permissions for %s setting permissions for %s Project-Id-Version: acl-2.1.2
Report-Msgid-Bugs-To: acl-devel@nongnu.org
POT-Creation-Date: 2018-06-18 23:10-0400
PO-Revision-Date: 2003-01-23 00:08GMT
Last-Translator: Andreas Grünbacher <a.gruenbacher@computer.org>
Language-Team:  <de@li.org>
Language: de
MIME-Version: 1.0
Content-Type: text/plain; charset=UTF-8
Content-Transfer-Encoding: 8bit
 	%s -B pfadname...
 	%s -D pfadname...
 	%s -R pfadname...
 	%s -b acl dacl pfadname...
 	%s -d dacl pfadname...
 	%s -l pfadname...	[nicht IRIX-kompatibel]
 	%s -r pfadname...	[nicht IRIX-kompatibel]
 	%s acl pfadname...
       --set=acl            Ersetze die ACL von Datei(en)
      --set-file=datei     Lies die ACL-Einträge aus datei
      --mask               Effektive Rechte nicht neu berechnen
   -R, --recursive          In Unterverzeichnisse wechseln
  -L, --logical            Symbolischen Links folgen
  -P, --physical           Symbolischen Links nicht folgen
      --restore=datei      ACLs wiederherstellen (Umkehr von `getfacl -R')
      --test               Testmodus (ACLs werden nicht verändert)
   -d, --default            Die Vorgabe-ACL ausgeben
   -m, --modify=acl         Verändere die ACL(s) von Datei(en)
  -M, --modify-file=datei  Lies die ACL-Einträge aus datei
  -x, --remove=acl         Entferne Einträge aus ACLs von Datei(en)
  -X, --remove-file=datei  Lies die ACL-Einträge aus datei
  -b, --remove-all         Alle erweiterten ACL-Einträge entfernen
  -k, --remove-default     Vorgabe-ACL entfernen
   -n, --no-mask            Effektive Rechte nicht neu berechnen
  -d, --default            Bearbeite die Vorgabe-ACL
 %s %s -- Datei-Zugriffskontrollisten (ACLs) anzeigen
 %s %s -- Datei-Zugriffskontrollisten (ACLs) ändern
 %s: %s in Zeile %d der Datei %s
 %s: %s in Zeile %d der Standardeingabe
 %s: %s: %s in Zeile %d
 %s: %s: Kann Besitzer/Gruppe nicht ändern: %s
 %s: %s: Ungültige Zugriffs-ACL `%s': %s bei Eintrag %d
 %s: %s: Ungültige Vorgabe-ACL `%s': %s bei Eintrag %d
 %s: %s: Kein Dateiname in Zeile %d gefunden; Abbruch
 %s: %s: Nur Verzeichnisse können Vorgabe-ACLs haben
 %s: Kein Dateiname in Zeile %d der Standardeingabe gefunden; Abbruch
 %s: Option -%c unvollständig
 %s: Option -%c: %s bei Zeichen %d
 %s: Entferne führende '/' von absoluten Pfadnamen
 %s: Standardeingabe: %s
 %s: Zugriffs-ACL '%s': %s bei Eintrag %d
 %s: Kann Zugriffs-ACL von '%s' nicht ermitteln: %s
 %s: Kann den Text zur Zugriffs-ACL von '%s' nicht ermitteln: %s
 %s: Kann Vorgabe-ACL von '%s' nicht ermitteln: %s
 %s: Kann den Text zur Vorgabe-ACL von '%s' nicht ermitteln: %s
 %s: Kann die Zugriffs-ACL von "%s" nicht setzen: %s
 %s: Kann die Vorgabe-ACL von "%s" nicht setzen: %s
 %s: Fehler beim Entfernen der Zugriffs-ACL von "%s": %s
 %s: Fehler beim Entfernen der Vorgabe-ACL von "%s": %s
 %s: malloc ist fehlgeschlagen: %s
 %s: opendir ist fehlgeschlagen: %s
 Doppelte Einträge Ungültiger Eintragstyp Fehlender oder falscher Eintrag Mehrere Einträge gleichen Typs Weiterführende Informationen mit `%s --help'.
 Verwendung:
 Verwendung: %s %s
 Aufruf: %s [-%s] datei ...
 Erhalten der Zugriffsrechte für %s Setzen der Zugriffsrechte für %s 