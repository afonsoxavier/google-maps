#!/usr/bin/env python
# Reads a KML document to extract a list of place-names

import re

tag_regex="(<name>)(?P<place>.+?)(</name>)"
for place in re.finditer(tag_regex, open("mapgoo.kml",'r').read()):
    print (place.group('place'))
