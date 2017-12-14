
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
require('./bootstrap');
require('./components/Example');

import  Example from './components/Example';

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
