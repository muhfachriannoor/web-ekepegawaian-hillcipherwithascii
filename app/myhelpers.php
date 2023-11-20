<?php
function myascii()
{
    $kodeascii = array(
        array(
            'desimal' => 0,
            'karakternya' => 'NULL',
            'deskripsi' => 'null'
        ),
        array(
            'desimal' => 1,
            'karakternya' => 'SOH',
            'deskripsi' => 'star of header'
        ),
        array(
            'desimal' => 2,
            'karakternya' => 'STX',
            'deskripsi' => 'star of text'
        ),
        array(
            'desimal' => 3,
            'karakternya' => 'ETX',
            'deskripsi' => 'end of text'
        ),
        array(
            'desimal' => 4,
            'karakternya' => 'EOT',
            'deskripsi' => 'end of transmission'
        ),
        array(
            'desimal' => 5,
            'karakternya' => 'ENQ',
            'deskripsi' => 'enquiry'
        ),
        array(
            'desimal' => 6,
            'karakternya' => 'ACK',
            'deskripsi' => 'acknowledgement'
        ),
        array(
            'desimal' => 7,
            'karakternya' => 'BEL',
            'deskripsi' => 'bell'
        ),
        array(
            'desimal' => 8,
            'karakternya' => 'BS',
            'deskripsi' => 'backspace'
        ),
        array(
            'desimal' => 9,
            'karakternya' => 'HT',
            'deskripsi' => 'horizontal tab'
        ),
        array(
            'desimal' => 10,
            'karakternya' => 'LF',
            'deskripsi' => 'line feed'
        ),
        array(
            'desimal' => 11,
            'karakternya' => 'VT',
            'deskripsi' => 'vertical tab'
        ),
        array(
            'desimal' => 12,
            'karakternya' => 'FF',
            'deskripsi' => 'form feed'
        ),
        array(
            'desimal' => 13,
            'karakternya' => 'CR',
            'deskripsi' => 'enter'
        ),
        array(
            'desimal' => 14,
            'karakternya' => 'SO',
            'deskripsi' => 'shift out'
        ),
        array(
            'desimal' => 15,
            'karakternya' => 'SI',
            'deskripsi' => 'shift in'
        ),
        array(
            'desimal' => 16,
            'karakternya' => 'DLE',
            'deskripsi' => 'data link escape'
        ),
        array(
            'desimal' => 17,
            'karakternya' => 'DC1',
            'deskripsi' => 'device control 1'
        ),
        array(
            'desimal' => 18,
            'karakternya' => 'DC2',
            'deskripsi' => 'device control 2'
        ),
        array(
            'desimal' => 19,
            'karakternya' => 'DC3',
            'deskripsi' => 'device control 3'
        ),
        array(
            'desimal' => 20,
            'karakternya' => 'DC4',
            'deskripsi' => 'device control 4'
        ),
        array(
            'desimal' => 21,
            'karakternya' => 'NAK',
            'deskripsi' => 'negative acknowledgement'
        ),
        array(
            'desimal' => 22,
            'karakternya' => 'SYN',
            'deskripsi' => 'synchronous idle'
        ),
        array(
            'desimal' => 23,
            'karakternya' => 'ETB',
            'deskripsi' => 'end of transmission block'
        ),
        array(
            'desimal' => 24,
            'karakternya' => 'CAN',
            'deskripsi' => 'cancel'
        ),
        array(
            'desimal' => 25,
            'karakternya' => 'EM',
            'deskripsi' => 'end of medium'
        ),
        array(
            'desimal' => 26,
            'karakternya' => 'SUB',
            'deskripsi' => 'substitue / ctrl + z'
        ),
        array(
            'desimal' => 27,
            'karakternya' => 'ESC',
            'deskripsi' => 'escape'
        ),
        array(
            'desimal' => 28,
            'karakternya' => 'FS',
            'deskripsi' => 'file separator'
        ),
        array(
            'desimal' => 29,
            'karakternya' => 'GS',
            'deskripsi' => 'group separator'
        ),
        array(
            'desimal' => 30,
            'karakternya' => 'RS',
            'deskripsi' => 'record separator'
        ),
        array(
            'desimal' => 31,
            'karakternya' => 'US',
            'deskripsi' => 'unit separator'
        ),
        array(
            'desimal' => 32,
            'karakternya' => 'space',
            'deskripsi' => 'spasi'
        ),
        array(
            'desimal' => 33,
            'karakternya' => '!',
            'deskripsi' => 'tanda seru'
        ),
        array(
            'desimal' => 34,
            'karakternya' => '"',
            'deskripsi' => 'tanda petik'
        ),
        array(
            'desimal' => 35,
            'karakternya' => '#',
            'deskripsi' => 'tanda pagar'
        ),
        array(
            'desimal' => 36,
            'karakternya' => '$',
            'deskripsi' => 'dollar'
        ),
        array(
            'desimal' => 37,
            'karakternya' => '%',
            'deskripsi' => 'persen'
        ),
        array(
            'desimal' => 38,
            'karakternya' => '&',
            'deskripsi' => 'ampersand'
        ),
        array(
            'desimal' => 39,
            'karakternya' => '\'',
            'deskripsi' => 'tanda petik tunggal'
        ), // tanda petik '
        array(
            'desimal' => 40,
            'karakternya' => '(',
            'deskripsi' => 'tanda kurung kiri'
        ),
        array(
            'desimal' => 41,
            'karakternya' => ')',
            'deskripsi' => 'tanda kurung kanan'
        ),
        array(
            'desimal' => 42,
            'karakternya' => '*',
            'deskripsi' => 'bintang'
        ),
        array(
            'desimal' => 43,
            'karakternya' => '+',
            'deskripsi' => 'tambah/plus'
        ),
        array(
            'desimal' => 44,
            'karakternya' => ',',
            'deskripsi' => 'koma'
        ),
        array(
            'desimal' => 45,
            'karakternya' => '-',
            'deskripsi' => 'garis strip'
        ),
        array(
            'desimal' => 46,
            'karakternya' => '.',
            'deskripsi' => 'titik'
        ),
        array(
            'desimal' => 47,
            'karakternya' => '/',
            'deskripsi' => 'garis miring'
        ),
        array(
            'desimal' => 48,
            'karakternya' => '0',
            'deskripsi' => 'nol'
        ),
        array(
            'desimal' => 49,
            'karakternya' => '1',
            'deskripsi' => 'satu'
        ),
        array(
            'desimal' => 50,
            'karakternya' => '2',
            'deskripsi' => 'dua'
        ),
        array(
            'desimal' => 51,
            'karakternya' => '3',
            'deskripsi' => 'tiga'
        ),
        array(
            'desimal' => 52,
            'karakternya' => '4',
            'deskripsi' => 'empat'
        ),
        array(
            'desimal' => 53,
            'karakternya' => '5',
            'deskripsi' => 'lima'
        ),
        array(
            'desimal' => 54,
            'karakternya' => '6',
            'deskripsi' => 'enam'
        ),
        array(
            'desimal' => 55,
            'karakternya' => '7',
            'deskripsi' => 'tujuh'
        ),
        array(
            'desimal' => 56,
            'karakternya' => '8',
            'deskripsi' => 'delapan'
        ),
        array(
            'desimal' => 57,
            'karakternya' => '9',
            'deskripsi' => 'sembilan'
        ),
        array(
            'desimal' => 58,
            'karakternya' => ':',
            'deskripsi' => 'titik dua'
        ),
        array(
            'desimal' => 59,
            'karakternya' => ';',
            'deskripsi' => 'titik koma'
        ),
        array(
            'desimal' => 60,
            'karakternya' => '<',
            'deskripsi' => 'kurang dari'
        ),
        array(
            'desimal' => 61,
            'karakternya' => '=',
            'deskripsi' => 'sama dengan'
        ),
        array(
            'desimal' => 62,
            'karakternya' => '>',
            'deskripsi' => 'lebih dari'
        ),
        array(
            'desimal' => 63,
            'karakternya' => '?',
            'deskripsi' => 'tanda tanya'
        ),
        array(
            'desimal' => 64,
            'karakternya' => '@',
            'deskripsi' => 'simbol at'
        ),
        array(
            'desimal' => 65,
            'karakternya' => 'A',
            'deskripsi' => 'kapital A'
        ),
        array(
            'desimal' => 66,
            'karakternya' => 'B',
            'deskripsi' => 'kapital B'
        ),
        array(
            'desimal' => 67,
            'karakternya' => 'C',
            'deskripsi' => 'kapital C'
        ),
        array(
            'desimal' => 68,
            'karakternya' => 'D',
            'deskripsi' => 'kapital D'
        ),
        array(
            'desimal' => 69,
            'karakternya' => 'E',
            'deskripsi' => 'kapital E'
        ),
        array(
            'desimal' => 70,
            'karakternya' => 'F',
            'deskripsi' => 'kapital F'
        ),
        array(
            'desimal' => 71,
            'karakternya' => 'G',
            'deskripsi' => 'kapital G'
        ),
        array(
            'desimal' => 72,
            'karakternya' => 'H',
            'deskripsi' => 'kapital H'
        ),
        array(
            'desimal' => 73,
            'karakternya' => 'I',
            'deskripsi' => 'kapital I'
        ),
        array(
            'desimal' => 74,
            'karakternya' => 'J',
            'deskripsi' => 'kapital J'
        ),
        array(
            'desimal' => 75,
            'karakternya' => 'K',
            'deskripsi' => 'kapital K'
        ),
        array(
            'desimal' => 76,
            'karakternya' => 'L',
            'deskripsi' => 'kapital L'
        ),
        array(
            'desimal' => 77,
            'karakternya' => 'M',
            'deskripsi' => 'kapital M'
        ),
        array(
            'desimal' => 78,
            'karakternya' => 'N',
            'deskripsi' => 'kapital N'
        ),
        array(
            'desimal' => 79,
            'karakternya' => 'O',
            'deskripsi' => 'kapital O'
        ),
        array(
            'desimal' => 80,
            'karakternya' => 'P',
            'deskripsi' => 'kapital P'
        ),
        array(
            'desimal' => 81,
            'karakternya' => 'Q',
            'deskripsi' => 'kapital Q'
        ),
        array(
            'desimal' => 82,
            'karakternya' => 'R',
            'deskripsi' => 'kapital R'
        ),
        array(
            'desimal' => 83,
            'karakternya' => 'S',
            'deskripsi' => 'kapital S'
        ),
        array(
            'desimal' => 84,
            'karakternya' => 'T',
            'deskripsi' => 'kapital T'
        ),
        array(
            'desimal' => 85,
            'karakternya' => 'U',
            'deskripsi' => 'kapital U'
        ),
        array(
            'desimal' => 86,
            'karakternya' => 'V',
            'deskripsi' => 'kapital V'
        ),
        array(
            'desimal' => 87,
            'karakternya' => 'W',
            'deskripsi' => 'kapital W'
        ),
        array(
            'desimal' => 88,
            'karakternya' => 'X',
            'deskripsi' => 'kapital X'
        ),
        array(
            'desimal' => 89,
            'karakternya' => 'Y',
            'deskripsi' => 'kapital Y'
        ),
        array(
            'desimal' => 90,
            'karakternya' => 'Z',
            'deskripsi' => 'kapital Z'
        ),
        array(
            'desimal' => 91,
            'karakternya' => '[',
            'deskripsi' => 'tanda kurung siku kiri'
        ),
        array(
            'desimal' => 92,
            'karakternya' => '\\',
            'deskripsi' => 'garis miring terbalik'
        ),
        array(
            'desimal' => 93,
            'karakternya' => ']',
            'deskripsi' => 'tanda kurung siku kanan'
        ),
        array(
            'desimal' => 94,
            'karakternya' => '^',
            'deskripsi' => 'caret'
        ),
        array(
            'desimal' => 95,
            'karakternya' => '_',
            'deskripsi' => 'underscore'
        ),
        array(
            'desimal' => 96,
            'karakternya' => '`',
            'deskripsi' => 'grave accent'
        ),
        array(
            'desimal' => 97,
            'karakternya' => 'a',
            'deskripsi' => 'huruf kecil a'
        ),
        array(
            'desimal' => 98,
            'karakternya' => 'b',
            'deskripsi' => 'huruf kecil b'
        ),
        array(
            'desimal' => 99,
            'karakternya' => 'c',
            'deskripsi' => 'huruf kecil c'
        ),
        array(
            'desimal' => 100,
            'karakternya' => 'd',
            'deskripsi' => 'huruf kecil d'
        ),
        array(
            'desimal' => 101,
            'karakternya' => 'e',
            'deskripsi' => 'huruf kecil e'
        ),
        array(
            'desimal' => 102,
            'karakternya' => 'f',
            'deskripsi' => 'huruf kecil f'
        ),
        array(
            'desimal' => 103,
            'karakternya' => 'g',
            'deskripsi' => 'huruf kecil g'
        ),
        array(
            'desimal' => 104,
            'karakternya' => 'h',
            'deskripsi' => 'huruf kecil h'
        ),
        array(
            'desimal' => 105,
            'karakternya' => 'i',
            'deskripsi' => 'huruf kecil i'
        ),
        array(
            'desimal' => 106,
            'karakternya' => 'j',
            'deskripsi' => 'huruf kecil j'
        ),
        array(
            'desimal' => 107,
            'karakternya' => 'k',
            'deskripsi' => 'huruf kecil k'
        ),
        array(
            'desimal' => 108,
            'karakternya' => 'l',
            'deskripsi' => 'huruf kecil l'
        ),
        array(
            'desimal' => 109,
            'karakternya' => 'm',
            'deskripsi' => 'huruf kecil m'
        ),
        array(
            'desimal' => 110,
            'karakternya' => 'n',
            'deskripsi' => 'huruf kecil n'
        ),
        array(
            'desimal' => 111,
            'karakternya' => 'o',
            'deskripsi' => 'huruf kecil o'
        ),
        array(
            'desimal' => 112,
            'karakternya' => 'p',
            'deskripsi' => 'huruf kecil p'
        ),
        array(
            'desimal' => 113,
            'karakternya' => 'q',
            'deskripsi' => 'huruf kecil q'
        ),
        array(
            'desimal' => 114,
            'karakternya' => 'r',
            'deskripsi' => 'huruf kecil r'
        ),
        array(
            'desimal' => 115,
            'karakternya' => 's',
            'deskripsi' => 'huruf kecil s'
        ),
        array(
            'desimal' => 116,
            'karakternya' => 't',
            'deskripsi' => 'huruf kecil t'
        ),
        array(
            'desimal' => 117,
            'karakternya' => 'u',
            'deskripsi' => 'huruf kecil u'
        ),
        array(
            'desimal' => 118,
            'karakternya' => 'v',
            'deskripsi' => 'huruf kecil v'
        ),
        array(
            'desimal' => 119,
            'karakternya' => 'w',
            'deskripsi' => 'huruf kecil w'
        ),
        array(
            'desimal' => 120,
            'karakternya' => 'x',
            'deskripsi' => 'huruf kecil x'
        ),
        array(
            'desimal' => 121,
            'karakternya' => 'y',
            'deskripsi' => 'huruf kecil y'
        ),
        array(
            'desimal' => 122,
            'karakternya' => 'z',
            'deskripsi' => 'huruf kecil z'
        ),
        array(
            'desimal' => 123,
            'karakternya' => '{',
            'deskripsi' => 'tanda kurung kurawal kiri'
        ),
        array(
            'desimal' => 124,
            'karakternya' => '|',
            'deskripsi' => 'vertical bar'
        ),
        array(
            'desimal' => 125,
            'karakternya' => '}',
            'deskripsi' => 'tanda kurung kurawal kanan'
        ),
        array(
            'desimal' => 126,
            'karakternya' => '~',
            'deskripsi' => 'tilde/cacing'
        ),
        array(
            'desimal' => 127,
            'karakternya' => 'DEL',
            'deskripsi' => 'delete'
        ),
        array(
            'desimal' => 128,
            'karakternya' => '€',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 129,
            'karakternya' => '',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 130,
            'karakternya' => '‚',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 131,
            'karakternya' => 'ƒ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 132,
            'karakternya' => '„',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 133,
            'karakternya' => '…',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 134,
            'karakternya' => '†',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 135,
            'karakternya' => '‡',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 136,
            'karakternya' => 'ˆ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 137,
            'karakternya' => '‰',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 138,
            'karakternya' => 'Š',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 139,
            'karakternya' => '‹',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 140,
            'karakternya' => 'Œ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 141,
            'karakternya' => '',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 142,
            'karakternya' => 'Ž',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 143,
            'karakternya' => '',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 144,
            'karakternya' => '',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 145,
            'karakternya' => '‘',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 146,
            'karakternya' => '’',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 147,
            'karakternya' => '“',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 148,
            'karakternya' => '”',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 149,
            'karakternya' => '•',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 150,
            'karakternya' => '–',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 151,
            'karakternya' => '—',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 152,
            'karakternya' => '˜',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 153,
            'karakternya' => '™',
            'deskripsi' => 'trademark'
        ),
        array(
            'desimal' => 154,
            'karakternya' => 'š',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 155,
            'karakternya' => '›',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 156,
            'karakternya' => 'œ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 157,
            'karakternya' => '',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 158,
            'karakternya' => 'ž',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 159,
            'karakternya' => 'Ÿ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 160,
            'karakternya' => ' ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 161,
            'karakternya' => '¡',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 162,
            'karakternya' => '¢',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 163,
            'karakternya' => '£',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 164,
            'karakternya' => '¤',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 165,
            'karakternya' => '¥',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 166,
            'karakternya' => '¦',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 167,
            'karakternya' => '§',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 168,
            'karakternya' => '¨',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 169,
            'karakternya' => '©',
            'deskripsi' => 'copyright'
        ),
        array(
            'desimal' => 170,
            'karakternya' => 'ª',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 171,
            'karakternya' => '«',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 172,
            'karakternya' => '¬',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 173,
            'karakternya' => '­',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 174,
            'karakternya' => '®',
            'deskripsi ' => ''
        ),
        array(
            'desimal' => 175,
            'karakternya' => '¯',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 176,
            'karakternya' => '°',
            'deskripsi' => 'derajat'
        ),
        array(
            'desimal' => 177,
            'karakternya' => '±',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 178,
            'karakternya' => '²',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 179,
            'karakternya' => '³',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 180,
            'karakternya' => '´',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 181,
            'karakternya' => 'µ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 182,
            'karakternya' => '¶',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 183,
            'karakternya' => '·',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 184,
            'karakternya' => '¸',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 185,
            'karakternya' => '¹',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 186,
            'karakternya' => 'º',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 187,
            'karakternya' => '»',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 188,
            'karakternya' => '¼',
            'deskripsi' => 'satu per empat'
        ),
        array(
            'desimal' => 189,
            'karakternya' => '½',
            'deskripsi' => 'setengah'
        ),
        array(
            'desimal' => 190,
            'karakternya' => '¾',
            'deskripsi' => 'tiga per empat'
        ),
        array(
            'desimal' => 191,
            'karakternya' => '¿',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 192,
            'karakternya' => 'À',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 193,
            'karakternya' => 'Á',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 194,
            'karakternya' => 'Â',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 195,
            'karakternya' => 'Ã',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 196,
            'karakternya' => 'Ä',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 197,
            'karakternya' => 'Å',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 198,
            'karakternya' => 'Æ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 199,
            'karakternya' => 'Ç',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 200,
            'karakternya' => 'È',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 201,
            'karakternya' => 'É',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 202,
            'karakternya' => 'Ê',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 203,
            'karakternya' => 'Ë',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 204,
            'karakternya' => 'Ì',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 205,
            'karakternya' => 'Í',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 206,
            'karakternya' => 'Î',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 207,
            'karakternya' => 'Ï',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 208,
            'karakternya' => 'Ð',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 209,
            'karakternya' => 'Ñ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 210,
            'karakternya' => 'Ò',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 211,
            'karakternya' => 'Ó',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 212,
            'karakternya' => 'Ô',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 213,
            'karakternya' => 'Õ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 214,
            'karakternya' => 'Ö',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 215,
            'karakternya' => '×',
            'deskripsi' => 'simbol perkalian'
        ),
        array(
            'desimal' => 216,
            'karakternya' => 'Ø',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 217,
            'karakternya' => 'Ù',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 218,
            'karakternya' => 'Ú',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 219,
            'karakternya' => 'Û',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 220,
            'karakternya' => 'Ü',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 221,
            'karakternya' => 'Ý',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 222,
            'karakternya' => 'Þ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 223,
            'karakternya' => 'ß',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 224,
            'karakternya' => 'à',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 225,
            'karakternya' => 'á',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 226,
            'karakternya' => 'â',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 227,
            'karakternya' => 'ã',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 228,
            'karakternya' => 'ä',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 229,
            'karakternya' => 'å',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 230,
            'karakternya' => 'æ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 231,
            'karakternya' => 'ç',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 232,
            'karakternya' => 'è',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 233,
            'karakternya' => 'é',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 234,
            'karakternya' => 'ê',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 235,
            'karakternya' => 'ë',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 236,
            'karakternya' => 'ì',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 237,
            'karakternya' => 'í',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 238,
            'karakternya' => 'î',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 239,
            'karakternya' => 'ï',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 240,
            'karakternya' => 'ð',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 241,
            'karakternya' => 'ñ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 242,
            'karakternya' => 'ò',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 243,
            'karakternya' => 'ó',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 244,
            'karakternya' => 'ô',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 245,
            'karakternya' => 'õ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 246,
            'karakternya' => 'ö',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 247,
            'karakternya' => '÷',
            'deskripsi' => 'simbol pembagian'
        ),
        array(
            'desimal' => 248,
            'karakternya' => 'ø',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 249,
            'karakternya' => 'ù',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 250,
            'karakternya' => 'ú',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 251,
            'karakternya' => 'û',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 252,
            'karakternya' => 'ü',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 253,
            'karakternya' => 'ý',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 254,
            'karakternya' => 'þ',
            'deskripsi' => ''
        ),
        array(
            'desimal' => 255,
            'karakternya' => 'ÿ',
            'deskripsi' => ''
        )
    );
    return $kodeascii;
}

function DesimaltoAscii($decimal)
{
    $array = [];
    for ($i = 0; $i < count($decimal); $i++) {
        for ($j = 0; $j < 3; $j++) {
            $array[$i][$j] = chr($decimal[$i][$j]);
        }
    }
    return $array;
}
function AsciitoDesimal($string)
{
    $array[][] = '';
    $divide    = count($string) / 3;
    $index_arr = 0;
    for ($i = 0; $i < $divide; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $array[$i][$j] = array_search($string[$index_arr], array_column(myascii(), 'karakternya'));
            $index_arr++;
        }
    }
    return $array;
}

function kuncimatriks()
{
    $Angka[0][0] = 2;
    $Angka[0][1] = 2;
    $Angka[0][2] = 1;
    $Angka[1][0] = 5;
    $Angka[1][1] = 3;
    $Angka[1][2] = 3;
    $Angka[2][0] = 3;
    $Angka[2][1] = 2;
    $Angka[2][2] = 1;

    return $Angka;
}

function inverskuncimatriks()
{
    $Angka[0][0] = 255;
    $Angka[0][1] = 0;
    $Angka[0][2] = 1;
    $Angka[1][0] = 172;
    $Angka[1][1] = 85;
    $Angka[1][2] = 85;
    $Angka[2][0] = 171;
    $Angka[2][1] = 86;
    $Angka[2][2] = 84;

    return $Angka;
}

function tampilmatriks3x3($A)
{
    for ($i = 0; $i <= 2; $i++) {
        if ($i > 0) {
            print "<br>";
        }
        for ($j = 0; $j <= 2; $j++) {
            print " | " . $A[$i][$j] . " | ";
        }
    }
}

function tampilmatriks3x1($A)
{
    for ($i = 0; $i <= 2; $i++) {
        if ($i > 0) {
            print "<br>";
        }
        for ($j = 0; $j == 0; $j++) {
            print " | " . $A[$i][$j] . " | ";
        }
    }
}

function hitungkali($Angka, $Angka2, $divide)
{
    for ($i = 0; $i <= $divide; $i++) {
        $perkalian1 = ($Angka[0][0] * $Angka2[$i][0]);
        $perkalian1 = $perkalian1 + $Angka[0][1] * $Angka2[$i][1];
        $perkalian1 = $perkalian1 + $Angka[0][2] * $Angka2[$i][2];

        $perkalian2 = ($Angka[1][0] * $Angka2[$i][0]);
        $perkalian2 = $perkalian2 + ($Angka[1][1] * $Angka2[$i][1]);
        $perkalian2 = $perkalian2 + ($Angka[1][2] * $Angka2[$i][2]);

        $perkalian3 = ($Angka[2][0] * $Angka2[$i][0]);
        $perkalian3 = $perkalian3 + ($Angka[2][1] * $Angka2[$i][1]);
        $perkalian3 = $perkalian3 + ($Angka[2][2] * $Angka2[$i][2]);

        $matriks_baru[$i][0] = $perkalian1 % 256;
        $matriks_baru[$i][1] = $perkalian2 % 256;
        $matriks_baru[$i][2] = $perkalian3 % 256;
    }
    return $matriks_baru;
}

function enkripsihillcipher($plainteks)
{
    $check_pt = strlen($plainteks); //menghitung panjang sebuah karakter

    if ($check_pt % 3 == 0) { //proses modulus atau sisa hasil bagi
        $str_split = str_split($plainteks); //mengubah string menjadi array (per karakter)
    } else { //jika tidak
        $plainteks .= '.'; //menambahkan karakter titik
        if ($check_pt % 3 == 0) { //lalu di cek lagi dengan modulus atau sisa hasil bagi
            $str_split = str_split($plainteks); //mengubah string menjadi array (perkarakter)
        } else {
            $plainteks .= '.'; //menambahkan karakter titik
            $str_split = str_split($plainteks); //mengubah string menjadi array (perkarakter)
        }
    }
    $array[][] = ''; //mendeklarasikan array
    $bagikarakter = count($str_split) / 3; //membagi karakter 3
    $divide       = round($bagikarakter);
    $index_arr = 0; //variabel index array str_split
    for ($i = 0; $i < $divide; $i++) { //looping matriks
        for ($j = 0; $j < 3; $j++) {
            $array[$i][$j] = ord($str_split[$index_arr]);
            $index_arr++;
        }
    }

    $dividekurang = $divide - 1;
    $hasil_kali = hitungKali(kuncimatriks(), $array, $dividekurang); //proses perkalian matriks kunci dengan array blok yang diatas
    $hasil_enkrip = DesimaltoAscii($hasil_kali); //proses mengubah desimal menjadi karakter ascii

    $tostring = '';
    for ($i = 0; $i < count($hasil_enkrip); $i++) { //looping array matriks menjadi string
        $tostring .= $hasil_enkrip[$i][0] . '' . $hasil_enkrip[$i][1] . '' . $hasil_enkrip[$i][2];
    }
    return $tostring;
}

function dekripsihillcipher($ciphertext)
{
    $array[][]    = ''; //mendeklarasikan array
    $string       = str_split($ciphertext); //mengubah string menjadi array (per karakter)
    $bagikarakter = count($string) / 3; //membagi karakter 3
    $divide       = round($bagikarakter);
    $index_arr    = 0; //variabel index array str_split

    for ($i = 0; $i < $divide; $i++) { //looping matriks
        for ($j = 0; $j < 3; $j++) {
            $array[$i][$j] = ord($string[$index_arr]);
            $index_arr++;
        }
    }

    $dividekurang = $divide - 1;
    $hasil_kali = hitungKali(inverskuncimatriks(), $array, $dividekurang); //proses perkalian matriks kunci dengan array blok yang diatas
    $hasil_enkrip = DesimaltoAscii($hasil_kali); //proses mengubah desimal menjadi karakter ascii

    $tostring = '';
    for ($i = 0; $i < count($hasil_enkrip); $i++) { //looping array matriks menjadi string
        $tostring .= $hasil_enkrip[$i][0] . '' . $hasil_enkrip[$i][1] . '' . $hasil_enkrip[$i][2];
    }
    return rtrim($tostring, "."); //menghilangkan karakter titik(.) paling kanan
}
