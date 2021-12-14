<?php

namespace AmpProject\Html\Parser;

use AmpProject\Tests\LoggingHtmlSaxHandler;
use AmpProject\Tests\LoggingHtmlSaxHandlerWithLocation;
use AmpProject\Tests\TestCase;

/**
 * Tests for AmpProject\Html\Parser\HtmlParser.
 *
 * @covers \AmpProject\Html\Parser\HtmlParser
 * @package ampproject/amp-toolbox
 */
class HtmlParserTest extends TestCase
{
    public function dataParsing()
    {
        return [
            'basic text' => [
                'hello world',
                [
                    'startDoc()',
                    'startTag(HTML,[])',
                    'startTag(HEAD,[])',
                    'endTag(HEAD)',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'pcdata("hello world")',
                    'endTag(BODY)',
                    'endTag(HTML)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'image tag' => [
                '<img src="hello.gif">',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(IMG,[src,hello.gif])',
                    'endTag(IMG)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'tags inside tags' => [
                '<div><span>hello world</span></div>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(DIV,[])',
                    'startTag(SPAN,[])',
                    'pcdata("hello world")',
                    'endTag(SPAN)',
                    'endTag(DIV)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'tag with multiple attributes' => [
                '<img src="hello.gif" width="400px">',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(IMG,[src,hello.gif,width,400px])',
                    'endTag(IMG)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'tag with duplicate attributes' => [
                '<a class=foo class=bar>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(A,[class,foo])',
                    'endTag(A)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'tag with boolean attribute' => [
                '<input type=checkbox checked>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(INPUT,[checked,,type,checkbox])',
                    'endTag(INPUT)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'unclosed tag' => [
                '<span>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(SPAN,[])',
                    'endTag(SPAN)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'style tag' => [
                '<span style="background-color: black;"></span>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(SPAN,[style,background-color: black;])',
                    'endTag(SPAN)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'cdata' => [
                '<script><![CDATA[alert("hey");]]></script>',
                [
                    'startDoc()',
                    'startTag(HEAD,[])',
                    'startTag(SCRIPT,[])',
                    'cdata("<![CDATA[alert("hey");]]>")',
                    'endTag(SCRIPT)',
                    'endTag(HEAD)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'several tags on the same level' => [
                '<img><p>hello<img><div/></p>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(IMG,[])',
                    'endTag(IMG)',
                    'startTag(P,[])',
                    'pcdata("hello")',
                    'startTag(IMG,[])',
                    'endTag(IMG)',
                    'startTag(DIV,[])',
                    'endTag(DIV)',
                    'endTag(P)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'skips over comments' => [
                '<div><!-- this is a comment --></div>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(DIV,[])',
                    'endTag(DIV)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'unknown or custom tags' => [
                '<a-tag><more-tags><custom foo="Hello">world.</more-tags></a-tag>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(A-TAG,[])',
                    'startTag(MORE-TAGS,[])',
                    'startTag(CUSTOM,[foo,Hello])',
                    'pcdata("world.")',
                    'endTag(CUSTOM)',
                    'endTag(MORE-TAGS)',
                    'endTag(A-TAG)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'oddly formatted attributes' => [
                // Note the two double quotes at the end of the tag.
                '<a href="foo.html""></a>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(A,[",,href,foo.html])',
                    'endTag(A)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            // See https://www.w3.org/TR/html-markup/p.html for the logic.
            '<p> tags with omitted </p> tags' => [
                '<p>I am not closed!<p>I am closed!</p>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(P,[])',
                    'pcdata("I am not closed!")',
                    'endTag(P)',
                    'startTag(P,[])',
                    'pcdata("I am closed!")',
                    'endTag(P)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            // See https://www.w3.org/TR/html-markup/dd.html for the logic.
            '<dd> and <dt> with omitted </dd> and </dt>' => [
                '<dl><dd><dd><dt><dd></dl>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(DL,[])',
                    'startTag(DD,[])',
                    'endTag(DD)',
                    'startTag(DD,[])',
                    'endTag(DD)',
                    'startTag(DT,[])',
                    'endTag(DT)',
                    'startTag(DD,[])',
                    'endTag(DD)',
                    'endTag(DL)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            // See https://www.w3.org/TR/html-markup/li.html for the logic.
            '<li> tags with omitted </li> tags' => [
                '<ul><li><li></ul>',
                [
                    'startDoc()',
                    'markManufacturedBody()',
                    'startTag(BODY,[])',
                    'startTag(UL,[])',
                    'startTag(LI,[])',
                    'endTag(LI)',
                    'startTag(LI,[])',
                    'endTag(LI)',
                    'endTag(UL)',
                    'endTag(BODY)',
                    'effectiveBodyTag([])',
                    'endDoc()',
                ],
            ],

            'attributes on the effective body tag' => [
                '<body foo=bar><body baz=bang><body foo=poo>',
                [
                    'startDoc()',
                    'startTag(BODY,[foo,bar])',
                    'endTag(BODY)',
                    'effectiveBodyTag([foo,bar,baz,bang,foo,poo])',
                    'endDoc()',
                ],
            ],
        ];
    }

    /**
     * @covers \AmpProject\Html\Parser\HtmlParser::parse()
     * @dataProvider dataParsing()
     */
    public function testParsing($html, $expectedLog)
    {
        $handler = new LoggingHtmlSaxHandler();
        $parser  = new HtmlParser();

        $parser->parse($handler, $html);

        $this->assertEquals($expectedLog, $handler->log);
    }

    /**
     * @covers \AmpProject\Html\Parser\HtmlParser::parse()
     */
    public function testStateIsNotHeldBetweenCalls()
    {
        $handler = new LoggingHtmlSaxHandler();
        $parser  = new HtmlParser();

        $parser->parse($handler, '<div/>');
        $parser->parse($handler, '<div/>');

        $this->assertEquals(
            [
                'startDoc()',
                'markManufacturedBody()',
                'startTag(BODY,[])',
                'startTag(DIV,[])',
                'endTag(DIV)',
                'endTag(BODY)',
                'effectiveBodyTag([])',
                'endDoc()',
                'startDoc()',
                'markManufacturedBody()',
                'startTag(BODY,[])',
                'startTag(DIV,[])',
                'endTag(DIV)',
                'endTag(BODY)',
                'effectiveBodyTag([])',
                'endDoc()',
            ],
            $handler->log
        );
    }

    public function dataParsingWithLocation()
    {
        return [
            'reports line and column' => [
                "<html>\n"
                . "  <body>\n"
                . "    <div style=foo>Oh hi!</div>\n"
                . "  </body>\n"
                . "</html>",
                [
                    ":1:0: startDoc()",
                    ":1:0: startTag(HTML,[])",
                    ":1:6: pcdata(\"\n  \")",
                    ":2:2: startTag(BODY,[])",
                    ":2:8: pcdata(\"\n    \")",
                    ":3:4: startTag(DIV,[style,foo])",
                    ":3:19: pcdata(\"Oh hi!\")",
                    ":3:25: endTag(DIV)",
                    ":3:31: pcdata(\"\n  \")",
                    ":4:9: pcdata(\"\n\")",
                    ":5:0: endTag(BODY)",
                    ":5:0: endTag(HTML)",
                    ":5:6: endDoc()",
                ],
            ],

            'does not insert closing events as html5 standard would suggest' => [
                // This test simply records the status quo with regard to HTML5 optional tags
                // (http://www.w3.org/TR/html5/syntax.html#optional-tags). We are interested in this behavior because
                // they can be very confusing to users - see https://github.com/ampproject/amphtml/issues/327. So it
                // turns out that unlike Chrome, this parser does not insert closing events like the HTML5 standard
                // would suggest. This is demonstrated in the below example for which Chrome would produce a DOM which
                // has the div outside the custom - because the div closes the p whereas the a-custom remains inside.
                "<html>\n"
                . "  <body>\n"
                . "    <p>\n"
                . "      <a-custom>\n"
                . "        <div style=foo>Oh hi!</div>\n"
                . "      </a-custom>\n"
                . "    </p>\n"
                . "  </body>\n"
                . "</html>",
                [
                    ":1:0: startDoc()",
                    ":1:0: startTag(HTML,[])",
                    ":1:6: pcdata(\"\n  \")",
                    ":2:2: startTag(BODY,[])",
                    ":2:8: pcdata(\"\n    \")",
                    ":3:4: startTag(P,[])",
                    ":3:7: pcdata(\"\n      \")",
                    ":4:6: startTag(A-CUSTOM,[])",
                    ":4:16: pcdata(\"\n        \")",
                    ":5:8: startTag(DIV,[style,foo])",
                    ":5:23: pcdata(\"Oh hi!\")",
                    ":5:29: endTag(DIV)",
                    ":5:35: pcdata(\"\n      \")",
                    ":6:6: endTag(A-CUSTOM)",
                    ":6:17: pcdata(\"\n    \")",
                    ":7:4: endTag(P)",
                    ":7:8: pcdata(\"\n  \")",
                    ":8:9: pcdata(\"\n\")",
                    ":9:0: endTag(BODY)",
                    ":9:0: endTag(HTML)",
                    ":9:6: endDoc()",
                ],
            ],

            'tracks line and column past complex cdata sections' => [
                // This covers a bugfix for the scenario where the cdata contains newlines etc.
                "<html>\n"
                . "<body>\n"
                . "<script type=\"application/json\">\n"
                . "{\n"
                . "\"vars\": {\n"
                . "\"account\": \"UA-XXXX-Y\"\n"
                . "},\n"
                . "\"triggers\": {\n"
                . "\"default pageview\": {\n"
                . "\"on\": \"visible\"\n"
                . "}\n"
                . "}\n"
                . "}\n"
                . "</script>\n"
                . "<amp-analytics></amp-analytics>\n"
                . "</body>\n"
                . "</html>",
                [
                    ":1:0: startDoc()",
                    ":1:0: startTag(HTML,[])",
                    ":1:6: pcdata(\"\n\")",
                    ":2:0: startTag(BODY,[])",
                    ":2:6: pcdata(\"\n\")",
                    ":3:0: startTag(SCRIPT,[type,application/json])",
                    ":3:0: cdata(\"\n"
                    . "{\n"
                    . "\"vars\": {\n"
                    . "\"account\": \"UA-XXXX-Y\"\n"
                    . "},\n"
                    . "\"triggers\": {\n"
                    . "\"default pageview\": {\n"
                    . "\"on\": \"visible\"\n"
                    . "}\n"
                    . "}\n"
                    . "}\n"
                    . "\")",
                    ":14:0: endTag(SCRIPT)",
                    ":14:9: pcdata(\"\n\")",
                    ":15:0: startTag(AMP-ANALYTICS,[])",
                    ":15:15: endTag(AMP-ANALYTICS)",
                    ":15:31: pcdata(\"\n\")",
                    ":16:7: pcdata(\"\n\")",
                    ":17:0: endTag(BODY)",
                    ":17:0: endTag(HTML)",
                    ":17:6: endDoc()",
                ],
            ],

            'supports turkish utf8 İ character in body' => [
                // A string with this character in it has length 1, but when lowercased it becomes length 2, which could
                // throw off the bookkeeping.
                "<!doctype html>\n"
                . "<html amp lang=\"tr\">\n"
                . "<head>\n"
                . "<meta charset=\"utf-8\">\n"
                . "<title></title>\n"
                . "<script async src=\"https://cdn.ampproject.org/v0.js\"></script>\n"
                . "</head>\n"
                . "<body>İ</body>\n"
                . "</html>",
                [
                    ":1:0: startDoc()",
                    ":1:0: startTag(!DOCTYPE,[html,])",
                    ":1:15: pcdata(\"\n\")",
                    ":2:0: startTag(HTML,[amp,,lang,tr])",
                    ":2:20: pcdata(\"\n\")",
                    ":3:0: startTag(HEAD,[])",
                    ":3:6: pcdata(\"\n\")",
                    ":4:0: startTag(META,[charset,utf-8])",
                    ":4:0: endTag(META)",
                    ":4:22: pcdata(\"\n\")",
                    ":5:0: startTag(TITLE,[])",
                    ":5:0: rcdata(\"\")",
                    ":5:7: endTag(TITLE)",
                    ":5:15: pcdata(\"\n\")",
                    ":6:0: startTag(SCRIPT,[async,,src,https://cdn.ampproject.org/v0.js])",
                    ":6:0: cdata(\"\")",
                    ":6:53: endTag(SCRIPT)",
                    ":6:62: pcdata(\"\n\")",
                    ":7:0: endTag(HEAD)",
                    ":7:7: pcdata(\"\n\")",
                    ":8:0: startTag(BODY,[])",
                    ":8:6: pcdata(\"İ\")",
                    ":8:14: pcdata(\"\n\")",
                    ":9:0: endTag(BODY)",
                    ":9:0: endTag(HTML)",
                    ":9:6: endTag(!DOCTYPE)",
                    ":9:6: endDoc()",
                ],
            ],

            'supports svg with self-closed tags' => [
                // A string with this character in it has length 1, but when lowercased it becomes length 2, which could
                // throw off the bookkeeping.
                '<html><body><svg><foo/></svg></body></html>',
                [
                    ":1:0: startDoc()",
                    ":1:0: startTag(HTML,[])",
                    ":1:6: startTag(BODY,[])",
                    ":1:12: startTag(SVG,[])",
                    ":1:17: startTag(FOO,[])",
                    ":1:23: endTag(FOO)",
                    ":1:23: endTag(SVG)",
                    ":1:36: endTag(BODY)",
                    ":1:36: endTag(HTML)",
                    ":1:42: endDoc()",
                ],
            ],
        ];
    }

    /**
     * @covers \AmpProject\Html\Parser\HtmlParser::parse()
     * @dataProvider dataParsingWithLocation()
     */
    public function testParsingWithLocation($html, $expectedLog)
    {
        $handler = new LoggingHtmlSaxHandlerWithLocation();
        $parser  = new HtmlParser();

        $parser->parse($handler, $html);

        $this->assertEquals($expectedLog, $handler->log);
    }
}
