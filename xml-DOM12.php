<?php
// create a new document
$dom = new DOMDocument('1.0');

// create the root element, <book>, and append it to the document
$univer = $dom->appendChild($dom->createElement('univer'));

// create the title element and append it to $book
$student = $univer->appendChild($dom->createElement('student'));

// set the text and the cover attribute for $title
$john = $student->appendChild($dom->createElement('name'));
$john->appendChild($dom->createTextNode('John'));
$kate = $student->appendChild($dom->createElement('name'));
$kate->appendChild($dom->createTextNode('Kate'));
$its = $student->appendChild($dom->createElement('group'));
$its->appendChild($dom->createTextNode('ITS'));
$student->setAttribute('course', '3');

// create and append author elements to $book
$teacher = $univer->appendChild($dom->createElement('teacher'));
// create and append the text for each element
$pavlov = $teacher->appendChild($dom->createElement('name'));
$pavlov->appendChild($dom->createTextNode('Pavlov'));
$prof = $teacher->appendChild($dom->createElement('prof'));
$prof->appendChild($dom->createTextNode('Dotthent'));
$teacher->setAttribute('category', 'highest');
// print a nicely formatted version of the DOM document as XML
$dom->formatOutput = true;
$dom->saveXML();
$dom->save('books.xml');
