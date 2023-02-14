/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./node_modules/@shopify/draggable/lib/draggable.bundle.js":
/*!*****************************************************************!*\
  !*** ./node_modules/@shopify/draggable/lib/draggable.bundle.js ***!
  \*****************************************************************/
/***/ ((module) => {

(function webpackUniversalModuleDefinition(root, factory) {
	if(true)
		module.exports = factory();
	else {}
})(window, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __nested_webpack_require_556__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __nested_webpack_require_556__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__nested_webpack_require_556__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__nested_webpack_require_556__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__nested_webpack_require_556__.d = function(exports, name, getter) {
/******/ 		if(!__nested_webpack_require_556__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__nested_webpack_require_556__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__nested_webpack_require_556__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __nested_webpack_require_556__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__nested_webpack_require_556__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __nested_webpack_require_556__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__nested_webpack_require_556__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__nested_webpack_require_556__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__nested_webpack_require_556__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__nested_webpack_require_556__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __nested_webpack_require_556__(__nested_webpack_require_556__.s = 66);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __nested_webpack_require_4021__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _AbstractEvent = __nested_webpack_require_4021__(64);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _AbstractEvent2.default;

/***/ }),
/* 1 */
/***/ (function(module, exports, __nested_webpack_require_4429__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _AbstractPlugin = __nested_webpack_require_4429__(60);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _AbstractPlugin2.default;

/***/ }),
/* 2 */
/***/ (function(module, exports, __nested_webpack_require_4841__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _closest = __nested_webpack_require_4841__(51);

Object.defineProperty(exports, 'closest', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_closest).default;
  }
});

var _requestNextAnimationFrame = __nested_webpack_require_4841__(49);

Object.defineProperty(exports, 'requestNextAnimationFrame', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_requestNextAnimationFrame).default;
  }
});

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/***/ }),
/* 3 */
/***/ (function(module, exports, __nested_webpack_require_5525__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _SensorEvent = __nested_webpack_require_5525__(44);

Object.keys(_SensorEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _SensorEvent[key];
    }
  });
});

/***/ }),
/* 4 */
/***/ (function(module, exports, __nested_webpack_require_5969__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _Sensor = __nested_webpack_require_5969__(47);

var _Sensor2 = _interopRequireDefault(_Sensor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Sensor2.default;

/***/ }),
/* 5 */
/***/ (function(module, exports, __nested_webpack_require_6349__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _DragEvent = __nested_webpack_require_6349__(14);

Object.keys(_DragEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _DragEvent[key];
    }
  });
});

var _DraggableEvent = __nested_webpack_require_6349__(13);

Object.keys(_DraggableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _DraggableEvent[key];
    }
  });
});

var _Plugins = __nested_webpack_require_6349__(12);

Object.keys(_Plugins).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _Plugins[key];
    }
  });
});

var _Sensors = __nested_webpack_require_6349__(6);

Object.keys(_Sensors).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _Sensors[key];
    }
  });
});

var _Draggable = __nested_webpack_require_6349__(37);

var _Draggable2 = _interopRequireDefault(_Draggable);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Draggable2.default;

/***/ }),
/* 6 */
/***/ (function(module, exports, __nested_webpack_require_7867__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _Sensor = __nested_webpack_require_7867__(4);

Object.defineProperty(exports, 'Sensor', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Sensor).default;
  }
});

var _MouseSensor = __nested_webpack_require_7867__(46);

Object.defineProperty(exports, 'MouseSensor', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_MouseSensor).default;
  }
});

var _TouchSensor = __nested_webpack_require_7867__(43);

Object.defineProperty(exports, 'TouchSensor', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_TouchSensor).default;
  }
});

var _DragSensor = __nested_webpack_require_7867__(41);

Object.defineProperty(exports, 'DragSensor', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_DragSensor).default;
  }
});

var _ForceTouchSensor = __nested_webpack_require_7867__(39);

Object.defineProperty(exports, 'ForceTouchSensor', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_ForceTouchSensor).default;
  }
});

var _SensorEvent = __nested_webpack_require_7867__(3);

Object.keys(_SensorEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _SensorEvent[key];
    }
  });
});

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/***/ }),
/* 7 */
/***/ (function(module, exports, __nested_webpack_require_9403__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _SnappableEvent = __nested_webpack_require_9403__(18);

Object.keys(_SnappableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _SnappableEvent[key];
    }
  });
});

/***/ }),
/* 8 */
/***/ (function(module, exports, __nested_webpack_require_9856__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _CollidableEvent = __nested_webpack_require_9856__(23);

Object.keys(_CollidableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _CollidableEvent[key];
    }
  });
});

/***/ }),
/* 9 */
/***/ (function(module, exports, __nested_webpack_require_10312__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _SortableEvent = __nested_webpack_require_10312__(27);

Object.keys(_SortableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _SortableEvent[key];
    }
  });
});

/***/ }),
/* 10 */
/***/ (function(module, exports, __nested_webpack_require_10763__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _SwappableEvent = __nested_webpack_require_10763__(30);

Object.keys(_SwappableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _SwappableEvent[key];
    }
  });
});

/***/ }),
/* 11 */
/***/ (function(module, exports, __nested_webpack_require_11217__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _DroppableEvent = __nested_webpack_require_11217__(33);

Object.keys(_DroppableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _DroppableEvent[key];
    }
  });
});

/***/ }),
/* 12 */
/***/ (function(module, exports, __nested_webpack_require_11671__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _Announcement = __nested_webpack_require_11671__(62);

Object.defineProperty(exports, 'Announcement', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Announcement).default;
  }
});
Object.defineProperty(exports, 'defaultAnnouncementOptions', {
  enumerable: true,
  get: function () {
    return _Announcement.defaultOptions;
  }
});

var _Focusable = __nested_webpack_require_11671__(59);

Object.defineProperty(exports, 'Focusable', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Focusable).default;
  }
});

var _Mirror = __nested_webpack_require_11671__(57);

Object.defineProperty(exports, 'Mirror', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Mirror).default;
  }
});
Object.defineProperty(exports, 'defaultMirrorOptions', {
  enumerable: true,
  get: function () {
    return _Mirror.defaultOptions;
  }
});

var _Scrollable = __nested_webpack_require_11671__(53);

Object.defineProperty(exports, 'Scrollable', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Scrollable).default;
  }
});
Object.defineProperty(exports, 'defaultScrollableOptions', {
  enumerable: true,
  get: function () {
    return _Scrollable.defaultOptions;
  }
});

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/***/ }),
/* 13 */
/***/ (function(module, exports, __nested_webpack_require_13148__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _DraggableEvent = __nested_webpack_require_13148__(63);

Object.keys(_DraggableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _DraggableEvent[key];
    }
  });
});

/***/ }),
/* 14 */
/***/ (function(module, exports, __nested_webpack_require_13602__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _DragEvent = __nested_webpack_require_13602__(65);

Object.keys(_DragEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _DragEvent[key];
    }
  });
});

/***/ }),
/* 15 */
/***/ (function(module, exports, __nested_webpack_require_14041__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _AbstractPlugin = __nested_webpack_require_14041__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onSortableSorted = Symbol('onSortableSorted');

/**
 * SwapAnimation default options
 * @property {Object} defaultOptions
 * @property {Number} defaultOptions.duration
 * @property {String} defaultOptions.easingFunction
 * @property {Boolean} defaultOptions.horizontal
 * @type {Object}
 */
const defaultOptions = exports.defaultOptions = {
  duration: 150,
  easingFunction: 'ease-in-out',
  horizontal: false
};

/**
 * SwapAnimation plugin adds swap animations for sortable
 * @class SwapAnimation
 * @module SwapAnimation
 * @extends AbstractPlugin
 */
class SwapAnimation extends _AbstractPlugin2.default {
  /**
   * SwapAnimation constructor.
   * @constructs SwapAnimation
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    super(draggable);

    /**
     * SwapAnimation options
     * @property {Object} options
     * @property {Number} defaultOptions.duration
     * @property {String} defaultOptions.easingFunction
     * @type {Object}
     */
    this.options = _extends({}, defaultOptions, this.getOptions());

    /**
     * Last animation frame
     * @property {Number} lastAnimationFrame
     * @type {Number}
     */
    this.lastAnimationFrame = null;

    this[onSortableSorted] = this[onSortableSorted].bind(this);
  }

  /**
   * Attaches plugins event listeners
   */
  attach() {
    this.draggable.on('sortable:sorted', this[onSortableSorted]);
  }

  /**
   * Detaches plugins event listeners
   */
  detach() {
    this.draggable.off('sortable:sorted', this[onSortableSorted]);
  }

  /**
   * Returns options passed through draggable
   * @return {Object}
   */
  getOptions() {
    return this.draggable.options.swapAnimation || {};
  }

  /**
   * Sortable sorted handler
   * @param {SortableSortedEvent} sortableEvent
   * @private
   */
  [onSortableSorted]({ oldIndex, newIndex, dragEvent }) {
    const { source, over } = dragEvent;

    cancelAnimationFrame(this.lastAnimationFrame);

    // Can be done in a separate frame
    this.lastAnimationFrame = requestAnimationFrame(() => {
      if (oldIndex >= newIndex) {
        animate(source, over, this.options);
      } else {
        animate(over, source, this.options);
      }
    });
  }
}

exports.default = SwapAnimation; /**
                                  * Animates two elements
                                  * @param {HTMLElement} from
                                  * @param {HTMLElement} to
                                  * @param {Object} options
                                  * @param {Number} options.duration
                                  * @param {String} options.easingFunction
                                  * @param {String} options.horizontal
                                  * @private
                                  */

function animate(from, to, { duration, easingFunction, horizontal }) {
  for (const element of [from, to]) {
    element.style.pointerEvents = 'none';
  }

  if (horizontal) {
    const width = from.offsetWidth;
    from.style.transform = `translate3d(${width}px, 0, 0)`;
    to.style.transform = `translate3d(-${width}px, 0, 0)`;
  } else {
    const height = from.offsetHeight;
    from.style.transform = `translate3d(0, ${height}px, 0)`;
    to.style.transform = `translate3d(0, -${height}px, 0)`;
  }

  requestAnimationFrame(() => {
    for (const element of [from, to]) {
      element.addEventListener('transitionend', resetElementOnTransitionEnd);
      element.style.transition = `transform ${duration}ms ${easingFunction}`;
      element.style.transform = '';
    }
  });
}

/**
 * Resets animation style properties after animation has completed
 * @param {Event} event
 * @private
 */
function resetElementOnTransitionEnd(event) {
  event.target.style.transition = '';
  event.target.style.pointerEvents = '';
  event.target.removeEventListener('transitionend', resetElementOnTransitionEnd);
}

/***/ }),
/* 16 */
/***/ (function(module, exports, __nested_webpack_require_18616__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _SwapAnimation = __nested_webpack_require_18616__(15);

var _SwapAnimation2 = _interopRequireDefault(_SwapAnimation);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _SwapAnimation2.default;
exports.defaultOptions = _SwapAnimation.defaultOptions;

/***/ }),
/* 17 */
/***/ (function(module, exports, __nested_webpack_require_19117__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _AbstractPlugin = __nested_webpack_require_19117__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

var _SnappableEvent = __nested_webpack_require_19117__(7);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onDragStart = Symbol('onDragStart');
const onDragStop = Symbol('onDragStop');
const onDragOver = Symbol('onDragOver');
const onDragOut = Symbol('onDragOut');
const onMirrorCreated = Symbol('onMirrorCreated');
const onMirrorDestroy = Symbol('onMirrorDestroy');

/**
 * Snappable plugin which snaps draggable elements into place
 * @class Snappable
 * @module Snappable
 * @extends AbstractPlugin
 */
class Snappable extends _AbstractPlugin2.default {
  /**
   * Snappable constructor.
   * @constructs Snappable
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    super(draggable);

    /**
     * Keeps track of the first source element
     * @property {HTMLElement|null} firstSource
     */
    this.firstSource = null;

    /**
     * Keeps track of the mirror element
     * @property {HTMLElement} mirror
     */
    this.mirror = null;

    this[onDragStart] = this[onDragStart].bind(this);
    this[onDragStop] = this[onDragStop].bind(this);
    this[onDragOver] = this[onDragOver].bind(this);
    this[onDragOut] = this[onDragOut].bind(this);
    this[onMirrorCreated] = this[onMirrorCreated].bind(this);
    this[onMirrorDestroy] = this[onMirrorDestroy].bind(this);
  }

  /**
   * Attaches plugins event listeners
   */
  attach() {
    this.draggable.on('drag:start', this[onDragStart]).on('drag:stop', this[onDragStop]).on('drag:over', this[onDragOver]).on('drag:out', this[onDragOut]).on('droppable:over', this[onDragOver]).on('droppable:out', this[onDragOut]).on('mirror:created', this[onMirrorCreated]).on('mirror:destroy', this[onMirrorDestroy]);
  }

  /**
   * Detaches plugins event listeners
   */
  detach() {
    this.draggable.off('drag:start', this[onDragStart]).off('drag:stop', this[onDragStop]).off('drag:over', this[onDragOver]).off('drag:out', this[onDragOut]).off('droppable:over', this[onDragOver]).off('droppable:out', this[onDragOut]).off('mirror:created', this[onMirrorCreated]).off('mirror:destroy', this[onMirrorDestroy]);
  }

  /**
   * Drag start handler
   * @private
   * @param {DragStartEvent} event - Drag start event
   */
  [onDragStart](event) {
    if (event.canceled()) {
      return;
    }

    this.firstSource = event.source;
  }

  /**
   * Drag stop handler
   * @private
   * @param {DragStopEvent} event - Drag stop event
   */
  [onDragStop]() {
    this.firstSource = null;
  }

  /**
   * Drag over handler
   * @private
   * @param {DragOverEvent|DroppableOverEvent} event - Drag over event
   */
  [onDragOver](event) {
    if (event.canceled()) {
      return;
    }

    const source = event.source || event.dragEvent.source;

    if (source === this.firstSource) {
      this.firstSource = null;
      return;
    }

    const snapInEvent = new _SnappableEvent.SnapInEvent({
      dragEvent: event,
      snappable: event.over || event.droppable
    });

    this.draggable.trigger(snapInEvent);

    if (snapInEvent.canceled()) {
      return;
    }

    if (this.mirror) {
      this.mirror.style.display = 'none';
    }

    source.classList.remove(this.draggable.getClassNameFor('source:dragging'));
    source.classList.add(this.draggable.getClassNameFor('source:placed'));

    // Need to cancel this in drag out
    setTimeout(() => {
      source.classList.remove(this.draggable.getClassNameFor('source:placed'));
    }, this.draggable.options.placedTimeout);
  }

  /**
   * Drag out handler
   * @private
   * @param {DragOutEvent|DroppableOutEvent} event - Drag out event
   */
  [onDragOut](event) {
    if (event.canceled()) {
      return;
    }

    const source = event.source || event.dragEvent.source;

    const snapOutEvent = new _SnappableEvent.SnapOutEvent({
      dragEvent: event,
      snappable: event.over || event.droppable
    });

    this.draggable.trigger(snapOutEvent);

    if (snapOutEvent.canceled()) {
      return;
    }

    if (this.mirror) {
      this.mirror.style.display = '';
    }

    source.classList.add(this.draggable.getClassNameFor('source:dragging'));
  }

  /**
   * Mirror created handler
   * @param {MirrorCreatedEvent} mirrorEvent
   * @private
   */
  [onMirrorCreated]({ mirror }) {
    this.mirror = mirror;
  }

  /**
   * Mirror destroy handler
   * @param {MirrorDestroyEvent} mirrorEvent
   * @private
   */
  [onMirrorDestroy]() {
    this.mirror = null;
  }
}
exports.default = Snappable;

/***/ }),
/* 18 */
/***/ (function(module, exports, __nested_webpack_require_23899__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.SnapOutEvent = exports.SnapInEvent = exports.SnapEvent = undefined;

var _AbstractEvent = __nested_webpack_require_23899__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base snap event
 * @class SnapEvent
 * @module SnapEvent
 * @extends AbstractEvent
 */
class SnapEvent extends _AbstractEvent2.default {

  /**
   * Drag event that triggered this snap event
   * @property dragEvent
   * @type {DragEvent}
   * @readonly
   */
  get dragEvent() {
    return this.data.dragEvent;
  }

  /**
   * Snappable element
   * @property snappable
   * @type {HTMLElement}
   * @readonly
   */
  get snappable() {
    return this.data.snappable;
  }
}

exports.SnapEvent = SnapEvent; /**
                                * Snap in event
                                * @class SnapInEvent
                                * @module SnapInEvent
                                * @extends SnapEvent
                                */

SnapEvent.type = 'snap';
class SnapInEvent extends SnapEvent {}

exports.SnapInEvent = SnapInEvent; /**
                                    * Snap out event
                                    * @class SnapOutEvent
                                    * @module SnapOutEvent
                                    * @extends SnapEvent
                                    */

SnapInEvent.type = 'snap:in';
SnapInEvent.cancelable = true;
class SnapOutEvent extends SnapEvent {}
exports.SnapOutEvent = SnapOutEvent;
SnapOutEvent.type = 'snap:out';
SnapOutEvent.cancelable = true;

/***/ }),
/* 19 */
/***/ (function(module, exports, __nested_webpack_require_25675__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _SnappableEvent = __nested_webpack_require_25675__(7);

Object.keys(_SnappableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _SnappableEvent[key];
    }
  });
});

var _Snappable = __nested_webpack_require_25675__(17);

var _Snappable2 = _interopRequireDefault(_Snappable);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Snappable2.default;

/***/ }),
/* 20 */
/***/ (function(module, exports, __nested_webpack_require_26363__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _AbstractPlugin = __nested_webpack_require_26363__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

var _utils = __nested_webpack_require_26363__(2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onMirrorCreated = Symbol('onMirrorCreated');
const onMirrorDestroy = Symbol('onMirrorDestroy');
const onDragOver = Symbol('onDragOver');
const resize = Symbol('resize');

/**
 * ResizeMirror default options
 * @property {Object} defaultOptions
 * @type {Object}
 */
const defaultOptions = exports.defaultOptions = {};

/**
 * The ResizeMirror plugin resizes the mirror element to the dimensions of the draggable element that the mirror is hovering over
 * @class ResizeMirror
 * @module ResizeMirror
 * @extends AbstractPlugin
 */
class ResizeMirror extends _AbstractPlugin2.default {
  /**
   * ResizeMirror constructor.
   * @constructs ResizeMirror
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    super(draggable);

    /**
     * ResizeMirror options
     * @property {Object} options
     * @type {Object}
     */
    this.options = _extends({}, defaultOptions, this.getOptions());

    /**
     * ResizeMirror remembers the last width when resizing the mirror
     * to avoid additional writes to the DOM
     * @property {number} lastWidth
     */
    this.lastWidth = 0;

    /**
     * ResizeMirror remembers the last height when resizing the mirror
     * to avoid additional writes to the DOM
     * @property {number} lastHeight
     */
    this.lastHeight = 0;

    /**
     * Keeps track of the mirror element
     * @property {HTMLElement} mirror
     */
    this.mirror = null;

    this[onMirrorCreated] = this[onMirrorCreated].bind(this);
    this[onMirrorDestroy] = this[onMirrorDestroy].bind(this);
    this[onDragOver] = this[onDragOver].bind(this);
  }

  /**
   * Attaches plugins event listeners
   */
  attach() {
    this.draggable.on('mirror:created', this[onMirrorCreated]).on('drag:over', this[onDragOver]).on('drag:over:container', this[onDragOver]);
  }

  /**
   * Detaches plugins event listeners
   */
  detach() {
    this.draggable.off('mirror:created', this[onMirrorCreated]).off('mirror:destroy', this[onMirrorDestroy]).off('drag:over', this[onDragOver]).off('drag:over:container', this[onDragOver]);
  }

  /**
   * Returns options passed through draggable
   * @return {Object}
   */
  getOptions() {
    return this.draggable.options.resizeMirror || {};
  }

  /**
   * Mirror created handler
   * @param {MirrorCreatedEvent} mirrorEvent
   * @private
   */
  [onMirrorCreated]({ mirror }) {
    this.mirror = mirror;
  }

  /**
   * Mirror destroy handler
   * @param {MirrorDestroyEvent} mirrorEvent
   * @private
   */
  [onMirrorDestroy]() {
    this.mirror = null;
  }

  /**
   * Drag over handler
   * @param {DragOverEvent | DragOverContainer} dragEvent
   * @private
   */
  [onDragOver](dragEvent) {
    this[resize](dragEvent);
  }

  /**
   * Resize function for
   * @param {DragOverEvent | DragOverContainer} dragEvent
   * @private
   */
  [resize]({ overContainer, over }) {
    requestAnimationFrame(() => {
      if (this.mirror.parentNode !== overContainer) {
        overContainer.appendChild(this.mirror);
      }

      const overElement = over || this.draggable.getDraggableElementsForContainer(overContainer)[0];

      if (!overElement) {
        return;
      }

      (0, _utils.requestNextAnimationFrame)(() => {
        const overRect = overElement.getBoundingClientRect();

        if (this.lastHeight === overRect.height && this.lastWidth === overRect.width) {
          return;
        }

        this.mirror.style.width = `${overRect.width}px`;
        this.mirror.style.height = `${overRect.height}px`;

        this.lastWidth = overRect.width;
        this.lastHeight = overRect.height;
      });
    });
  }
}
exports.default = ResizeMirror;

/***/ }),
/* 21 */
/***/ (function(module, exports, __nested_webpack_require_30733__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _ResizeMirror = __nested_webpack_require_30733__(20);

var _ResizeMirror2 = _interopRequireDefault(_ResizeMirror);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _ResizeMirror2.default;
exports.defaultOptions = _ResizeMirror.defaultOptions;

/***/ }),
/* 22 */
/***/ (function(module, exports, __nested_webpack_require_31229__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _AbstractPlugin = __nested_webpack_require_31229__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

var _utils = __nested_webpack_require_31229__(2);

var _CollidableEvent = __nested_webpack_require_31229__(8);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onDragMove = Symbol('onDragMove');
const onDragStop = Symbol('onDragStop');
const onRequestAnimationFrame = Symbol('onRequestAnimationFrame');

/**
 * Collidable plugin which detects colliding elements while dragging
 * @class Collidable
 * @module Collidable
 * @extends AbstractPlugin
 */
class Collidable extends _AbstractPlugin2.default {
  /**
   * Collidable constructor.
   * @constructs Collidable
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    super(draggable);

    /**
     * Keeps track of currently colliding elements
     * @property {HTMLElement|null} currentlyCollidingElement
     * @type {HTMLElement|null}
     */
    this.currentlyCollidingElement = null;

    /**
     * Keeps track of currently colliding elements
     * @property {HTMLElement|null} lastCollidingElement
     * @type {HTMLElement|null}
     */
    this.lastCollidingElement = null;

    /**
     * Animation frame for finding colliding elements
     * @property {Number|null} currentAnimationFrame
     * @type {Number|null}
     */
    this.currentAnimationFrame = null;

    this[onDragMove] = this[onDragMove].bind(this);
    this[onDragStop] = this[onDragStop].bind(this);
    this[onRequestAnimationFrame] = this[onRequestAnimationFrame].bind(this);
  }

  /**
   * Attaches plugins event listeners
   */
  attach() {
    this.draggable.on('drag:move', this[onDragMove]).on('drag:stop', this[onDragStop]);
  }

  /**
   * Detaches plugins event listeners
   */
  detach() {
    this.draggable.off('drag:move', this[onDragMove]).off('drag:stop', this[onDragStop]);
  }

  /**
   * Returns current collidables based on `collidables` option
   * @return {HTMLElement[]}
   */
  getCollidables() {
    const collidables = this.draggable.options.collidables;

    if (typeof collidables === 'string') {
      return Array.prototype.slice.call(document.querySelectorAll(collidables));
    } else if (collidables instanceof NodeList || collidables instanceof Array) {
      return Array.prototype.slice.call(collidables);
    } else if (collidables instanceof HTMLElement) {
      return [collidables];
    } else if (typeof collidables === 'function') {
      return collidables();
    } else {
      return [];
    }
  }

  /**
   * Drag move handler
   * @private
   * @param {DragMoveEvent} event - Drag move event
   */
  [onDragMove](event) {
    const target = event.sensorEvent.target;

    this.currentAnimationFrame = requestAnimationFrame(this[onRequestAnimationFrame](target));

    if (this.currentlyCollidingElement) {
      event.cancel();
    }

    const collidableInEvent = new _CollidableEvent.CollidableInEvent({
      dragEvent: event,
      collidingElement: this.currentlyCollidingElement
    });

    const collidableOutEvent = new _CollidableEvent.CollidableOutEvent({
      dragEvent: event,
      collidingElement: this.lastCollidingElement
    });

    const enteringCollidable = Boolean(this.currentlyCollidingElement && this.lastCollidingElement !== this.currentlyCollidingElement);
    const leavingCollidable = Boolean(!this.currentlyCollidingElement && this.lastCollidingElement);

    if (enteringCollidable) {
      if (this.lastCollidingElement) {
        this.draggable.trigger(collidableOutEvent);
      }

      this.draggable.trigger(collidableInEvent);
    } else if (leavingCollidable) {
      this.draggable.trigger(collidableOutEvent);
    }

    this.lastCollidingElement = this.currentlyCollidingElement;
  }

  /**
   * Drag stop handler
   * @private
   * @param {DragStopEvent} event - Drag stop event
   */
  [onDragStop](event) {
    const lastCollidingElement = this.currentlyCollidingElement || this.lastCollidingElement;
    const collidableOutEvent = new _CollidableEvent.CollidableOutEvent({
      dragEvent: event,
      collidingElement: lastCollidingElement
    });

    if (lastCollidingElement) {
      this.draggable.trigger(collidableOutEvent);
    }

    this.lastCollidingElement = null;
    this.currentlyCollidingElement = null;
  }

  /**
   * Animation frame function
   * @private
   * @param {HTMLElement} target - Current move target
   * @return {Function}
   */
  [onRequestAnimationFrame](target) {
    return () => {
      const collidables = this.getCollidables();
      this.currentlyCollidingElement = (0, _utils.closest)(target, element => collidables.includes(element));
    };
  }
}
exports.default = Collidable;

/***/ }),
/* 23 */
/***/ (function(module, exports, __nested_webpack_require_36116__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.CollidableOutEvent = exports.CollidableInEvent = exports.CollidableEvent = undefined;

var _AbstractEvent = __nested_webpack_require_36116__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base collidable event
 * @class CollidableEvent
 * @module CollidableEvent
 * @extends AbstractEvent
 */
class CollidableEvent extends _AbstractEvent2.default {

  /**
   * Drag event that triggered this colliable event
   * @property dragEvent
   * @type {DragEvent}
   * @readonly
   */
  get dragEvent() {
    return this.data.dragEvent;
  }
}

exports.CollidableEvent = CollidableEvent; /**
                                            * Collidable in event
                                            * @class CollidableInEvent
                                            * @module CollidableInEvent
                                            * @extends CollidableEvent
                                            */

CollidableEvent.type = 'collidable';
class CollidableInEvent extends CollidableEvent {

  /**
   * Element you are currently colliding with
   * @property collidingElement
   * @type {HTMLElement}
   * @readonly
   */
  get collidingElement() {
    return this.data.collidingElement;
  }
}

exports.CollidableInEvent = CollidableInEvent; /**
                                                * Collidable out event
                                                * @class CollidableOutEvent
                                                * @module CollidableOutEvent
                                                * @extends CollidableEvent
                                                */

CollidableInEvent.type = 'collidable:in';
class CollidableOutEvent extends CollidableEvent {

  /**
   * Element you were previously colliding with
   * @property collidingElement
   * @type {HTMLElement}
   * @readonly
   */
  get collidingElement() {
    return this.data.collidingElement;
  }
}
exports.CollidableOutEvent = CollidableOutEvent;
CollidableOutEvent.type = 'collidable:out';

/***/ }),
/* 24 */
/***/ (function(module, exports, __nested_webpack_require_38389__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _CollidableEvent = __nested_webpack_require_38389__(8);

Object.keys(_CollidableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _CollidableEvent[key];
    }
  });
});

var _Collidable = __nested_webpack_require_38389__(22);

var _Collidable2 = _interopRequireDefault(_Collidable);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Collidable2.default;

/***/ }),
/* 25 */
/***/ (function(module, exports, __nested_webpack_require_39084__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _Collidable = __nested_webpack_require_39084__(24);

Object.defineProperty(exports, 'Collidable', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Collidable).default;
  }
});

var _ResizeMirror = __nested_webpack_require_39084__(21);

Object.defineProperty(exports, 'ResizeMirror', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_ResizeMirror).default;
  }
});
Object.defineProperty(exports, 'defaultResizeMirrorOptions', {
  enumerable: true,
  get: function () {
    return _ResizeMirror.defaultOptions;
  }
});

var _Snappable = __nested_webpack_require_39084__(19);

Object.defineProperty(exports, 'Snappable', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Snappable).default;
  }
});

var _SwapAnimation = __nested_webpack_require_39084__(16);

Object.defineProperty(exports, 'SwapAnimation', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_SwapAnimation).default;
  }
});
Object.defineProperty(exports, 'defaultSwapAnimationOptions', {
  enumerable: true,
  get: function () {
    return _SwapAnimation.defaultOptions;
  }
});

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/***/ }),
/* 26 */
/***/ (function(module, exports, __nested_webpack_require_40447__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _Draggable = __nested_webpack_require_40447__(5);

var _Draggable2 = _interopRequireDefault(_Draggable);

var _SortableEvent = __nested_webpack_require_40447__(9);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onDragStart = Symbol('onDragStart');
const onDragOverContainer = Symbol('onDragOverContainer');
const onDragOver = Symbol('onDragOver');
const onDragStop = Symbol('onDragStop');

/**
 * Returns announcement message when a Draggable element has been sorted with another Draggable element
 * or moved into a new container
 * @param {SortableSortedEvent} sortableEvent
 * @return {String}
 */
function onSortableSortedDefaultAnnouncement({ dragEvent }) {
  const sourceText = dragEvent.source.textContent.trim() || dragEvent.source.id || 'sortable element';

  if (dragEvent.over) {
    const overText = dragEvent.over.textContent.trim() || dragEvent.over.id || 'sortable element';
    const isFollowing = dragEvent.source.compareDocumentPosition(dragEvent.over) & Node.DOCUMENT_POSITION_FOLLOWING;

    if (isFollowing) {
      return `Placed ${sourceText} after ${overText}`;
    } else {
      return `Placed ${sourceText} before ${overText}`;
    }
  } else {
    // need to figure out how to compute container name
    return `Placed ${sourceText} into a different container`;
  }
}

/**
 * @const {Object} defaultAnnouncements
 * @const {Function} defaultAnnouncements['sortable:sorted']
 */
const defaultAnnouncements = {
  'sortable:sorted': onSortableSortedDefaultAnnouncement
};

/**
 * Sortable is built on top of Draggable and allows sorting of draggable elements. Sortable will keep
 * track of the original index and emits the new index as you drag over draggable elements.
 * @class Sortable
 * @module Sortable
 * @extends Draggable
 */
class Sortable extends _Draggable2.default {
  /**
   * Sortable constructor.
   * @constructs Sortable
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Sortable containers
   * @param {Object} options - Options for Sortable
   */
  constructor(containers = [], options = {}) {
    super(containers, _extends({}, options, {
      announcements: _extends({}, defaultAnnouncements, options.announcements || {})
    }));

    /**
     * start index of source on drag start
     * @property startIndex
     * @type {Number}
     */
    this.startIndex = null;

    /**
     * start container on drag start
     * @property startContainer
     * @type {HTMLElement}
     * @default null
     */
    this.startContainer = null;

    this[onDragStart] = this[onDragStart].bind(this);
    this[onDragOverContainer] = this[onDragOverContainer].bind(this);
    this[onDragOver] = this[onDragOver].bind(this);
    this[onDragStop] = this[onDragStop].bind(this);

    this.on('drag:start', this[onDragStart]).on('drag:over:container', this[onDragOverContainer]).on('drag:over', this[onDragOver]).on('drag:stop', this[onDragStop]);
  }

  /**
   * Destroys Sortable instance.
   */
  destroy() {
    super.destroy();

    this.off('drag:start', this[onDragStart]).off('drag:over:container', this[onDragOverContainer]).off('drag:over', this[onDragOver]).off('drag:stop', this[onDragStop]);
  }

  /**
   * Returns true index of element within its container during drag operation, i.e. excluding mirror and original source
   * @param {HTMLElement} element - An element
   * @return {Number}
   */
  index(element) {
    return this.getDraggableElementsForContainer(element.parentNode).indexOf(element);
  }

  /**
   * Drag start handler
   * @private
   * @param {DragStartEvent} event - Drag start event
   */
  [onDragStart](event) {
    this.startContainer = event.source.parentNode;
    this.startIndex = this.index(event.source);

    const sortableStartEvent = new _SortableEvent.SortableStartEvent({
      dragEvent: event,
      startIndex: this.startIndex,
      startContainer: this.startContainer
    });

    this.trigger(sortableStartEvent);

    if (sortableStartEvent.canceled()) {
      event.cancel();
    }
  }

  /**
   * Drag over container handler
   * @private
   * @param {DragOverContainerEvent} event - Drag over container event
   */
  [onDragOverContainer](event) {
    if (event.canceled()) {
      return;
    }

    const { source, over, overContainer } = event;
    const oldIndex = this.index(source);

    const sortableSortEvent = new _SortableEvent.SortableSortEvent({
      dragEvent: event,
      currentIndex: oldIndex,
      source,
      over
    });

    this.trigger(sortableSortEvent);

    if (sortableSortEvent.canceled()) {
      return;
    }

    const children = this.getDraggableElementsForContainer(overContainer);
    const moves = move({ source, over, overContainer, children });

    if (!moves) {
      return;
    }

    const { oldContainer, newContainer } = moves;
    const newIndex = this.index(event.source);

    const sortableSortedEvent = new _SortableEvent.SortableSortedEvent({
      dragEvent: event,
      oldIndex,
      newIndex,
      oldContainer,
      newContainer
    });

    this.trigger(sortableSortedEvent);
  }

  /**
   * Drag over handler
   * @private
   * @param {DragOverEvent} event - Drag over event
   */
  [onDragOver](event) {
    if (event.over === event.originalSource || event.over === event.source) {
      return;
    }

    const { source, over, overContainer } = event;
    const oldIndex = this.index(source);

    const sortableSortEvent = new _SortableEvent.SortableSortEvent({
      dragEvent: event,
      currentIndex: oldIndex,
      source,
      over
    });

    this.trigger(sortableSortEvent);

    if (sortableSortEvent.canceled()) {
      return;
    }

    const children = this.getDraggableElementsForContainer(overContainer);
    const moves = move({ source, over, overContainer, children });

    if (!moves) {
      return;
    }

    const { oldContainer, newContainer } = moves;
    const newIndex = this.index(source);

    const sortableSortedEvent = new _SortableEvent.SortableSortedEvent({
      dragEvent: event,
      oldIndex,
      newIndex,
      oldContainer,
      newContainer
    });

    this.trigger(sortableSortedEvent);
  }

  /**
   * Drag stop handler
   * @private
   * @param {DragStopEvent} event - Drag stop event
   */
  [onDragStop](event) {
    const sortableStopEvent = new _SortableEvent.SortableStopEvent({
      dragEvent: event,
      oldIndex: this.startIndex,
      newIndex: this.index(event.source),
      oldContainer: this.startContainer,
      newContainer: event.source.parentNode
    });

    this.trigger(sortableStopEvent);

    this.startIndex = null;
    this.startContainer = null;
  }
}

exports.default = Sortable;
function index(element) {
  return Array.prototype.indexOf.call(element.parentNode.children, element);
}

function move({ source, over, overContainer, children }) {
  const emptyOverContainer = !children.length;
  const differentContainer = source.parentNode !== overContainer;
  const sameContainer = over && !differentContainer;

  if (emptyOverContainer) {
    return moveInsideEmptyContainer(source, overContainer);
  } else if (sameContainer) {
    return moveWithinContainer(source, over);
  } else if (differentContainer) {
    return moveOutsideContainer(source, over, overContainer);
  } else {
    return null;
  }
}

function moveInsideEmptyContainer(source, overContainer) {
  const oldContainer = source.parentNode;

  overContainer.appendChild(source);

  return { oldContainer, newContainer: overContainer };
}

function moveWithinContainer(source, over) {
  const oldIndex = index(source);
  const newIndex = index(over);

  if (oldIndex < newIndex) {
    source.parentNode.insertBefore(source, over.nextElementSibling);
  } else {
    source.parentNode.insertBefore(source, over);
  }

  return { oldContainer: source.parentNode, newContainer: source.parentNode };
}

function moveOutsideContainer(source, over, overContainer) {
  const oldContainer = source.parentNode;

  if (over) {
    over.parentNode.insertBefore(source, over);
  } else {
    // need to figure out proper position
    overContainer.appendChild(source);
  }

  return { oldContainer, newContainer: source.parentNode };
}

/***/ }),
/* 27 */
/***/ (function(module, exports, __nested_webpack_require_49051__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.SortableStopEvent = exports.SortableSortedEvent = exports.SortableSortEvent = exports.SortableStartEvent = exports.SortableEvent = undefined;

var _AbstractEvent = __nested_webpack_require_49051__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base sortable event
 * @class SortableEvent
 * @module SortableEvent
 * @extends AbstractEvent
 */
class SortableEvent extends _AbstractEvent2.default {

  /**
   * Original drag event that triggered this sortable event
   * @property dragEvent
   * @type {DragEvent}
   * @readonly
   */
  get dragEvent() {
    return this.data.dragEvent;
  }
}

exports.SortableEvent = SortableEvent; /**
                                        * Sortable start event
                                        * @class SortableStartEvent
                                        * @module SortableStartEvent
                                        * @extends SortableEvent
                                        */

SortableEvent.type = 'sortable';
class SortableStartEvent extends SortableEvent {

  /**
   * Start index of source on sortable start
   * @property startIndex
   * @type {Number}
   * @readonly
   */
  get startIndex() {
    return this.data.startIndex;
  }

  /**
   * Start container on sortable start
   * @property startContainer
   * @type {HTMLElement}
   * @readonly
   */
  get startContainer() {
    return this.data.startContainer;
  }
}

exports.SortableStartEvent = SortableStartEvent; /**
                                                  * Sortable sort event
                                                  * @class SortableSortEvent
                                                  * @module SortableSortEvent
                                                  * @extends SortableEvent
                                                  */

SortableStartEvent.type = 'sortable:start';
SortableStartEvent.cancelable = true;
class SortableSortEvent extends SortableEvent {

  /**
   * Index of current draggable element
   * @property currentIndex
   * @type {Number}
   * @readonly
   */
  get currentIndex() {
    return this.data.currentIndex;
  }

  /**
   * Draggable element you are hovering over
   * @property over
   * @type {HTMLElement}
   * @readonly
   */
  get over() {
    return this.data.oldIndex;
  }

  /**
   * Draggable container element you are hovering over
   * @property overContainer
   * @type {HTMLElement}
   * @readonly
   */
  get overContainer() {
    return this.data.newIndex;
  }
}

exports.SortableSortEvent = SortableSortEvent; /**
                                                * Sortable sorted event
                                                * @class SortableSortedEvent
                                                * @module SortableSortedEvent
                                                * @extends SortableEvent
                                                */

SortableSortEvent.type = 'sortable:sort';
SortableSortEvent.cancelable = true;
class SortableSortedEvent extends SortableEvent {

  /**
   * Index of last sorted event
   * @property oldIndex
   * @type {Number}
   * @readonly
   */
  get oldIndex() {
    return this.data.oldIndex;
  }

  /**
   * New index of this sorted event
   * @property newIndex
   * @type {Number}
   * @readonly
   */
  get newIndex() {
    return this.data.newIndex;
  }

  /**
   * Old container of draggable element
   * @property oldContainer
   * @type {HTMLElement}
   * @readonly
   */
  get oldContainer() {
    return this.data.oldContainer;
  }

  /**
   * New container of draggable element
   * @property newContainer
   * @type {HTMLElement}
   * @readonly
   */
  get newContainer() {
    return this.data.newContainer;
  }
}

exports.SortableSortedEvent = SortableSortedEvent; /**
                                                    * Sortable stop event
                                                    * @class SortableStopEvent
                                                    * @module SortableStopEvent
                                                    * @extends SortableEvent
                                                    */

SortableSortedEvent.type = 'sortable:sorted';
class SortableStopEvent extends SortableEvent {

  /**
   * Original index on sortable start
   * @property oldIndex
   * @type {Number}
   * @readonly
   */
  get oldIndex() {
    return this.data.oldIndex;
  }

  /**
   * New index of draggable element
   * @property newIndex
   * @type {Number}
   * @readonly
   */
  get newIndex() {
    return this.data.newIndex;
  }

  /**
   * Original container of draggable element
   * @property oldContainer
   * @type {HTMLElement}
   * @readonly
   */
  get oldContainer() {
    return this.data.oldContainer;
  }

  /**
   * New container of draggable element
   * @property newContainer
   * @type {HTMLElement}
   * @readonly
   */
  get newContainer() {
    return this.data.newContainer;
  }
}
exports.SortableStopEvent = SortableStopEvent;
SortableStopEvent.type = 'sortable:stop';

/***/ }),
/* 28 */
/***/ (function(module, exports, __nested_webpack_require_54331__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _SortableEvent = __nested_webpack_require_54331__(9);

Object.keys(_SortableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _SortableEvent[key];
    }
  });
});

var _Sortable = __nested_webpack_require_54331__(26);

var _Sortable2 = _interopRequireDefault(_Sortable);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Sortable2.default;

/***/ }),
/* 29 */
/***/ (function(module, exports, __nested_webpack_require_55012__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _Draggable = __nested_webpack_require_55012__(5);

var _Draggable2 = _interopRequireDefault(_Draggable);

var _SwappableEvent = __nested_webpack_require_55012__(10);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onDragStart = Symbol('onDragStart');
const onDragOver = Symbol('onDragOver');
const onDragStop = Symbol('onDragStop');

/**
 * Returns an announcement message when the Draggable element is swapped with another draggable element
 * @param {SwappableSwappedEvent} swappableEvent
 * @return {String}
 */
function onSwappableSwappedDefaultAnnouncement({ dragEvent, swappedElement }) {
  const sourceText = dragEvent.source.textContent.trim() || dragEvent.source.id || 'swappable element';
  const overText = swappedElement.textContent.trim() || swappedElement.id || 'swappable element';

  return `Swapped ${sourceText} with ${overText}`;
}

/**
 * @const {Object} defaultAnnouncements
 * @const {Function} defaultAnnouncements['swappabled:swapped']
 */
const defaultAnnouncements = {
  'swappabled:swapped': onSwappableSwappedDefaultAnnouncement
};

/**
 * Swappable is built on top of Draggable and allows swapping of draggable elements.
 * Order is irrelevant to Swappable.
 * @class Swappable
 * @module Swappable
 * @extends Draggable
 */
class Swappable extends _Draggable2.default {
  /**
   * Swappable constructor.
   * @constructs Swappable
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Swappable containers
   * @param {Object} options - Options for Swappable
   */
  constructor(containers = [], options = {}) {
    super(containers, _extends({}, options, {
      announcements: _extends({}, defaultAnnouncements, options.announcements || {})
    }));

    /**
     * Last draggable element that was dragged over
     * @property lastOver
     * @type {HTMLElement}
     */
    this.lastOver = null;

    this[onDragStart] = this[onDragStart].bind(this);
    this[onDragOver] = this[onDragOver].bind(this);
    this[onDragStop] = this[onDragStop].bind(this);

    this.on('drag:start', this[onDragStart]).on('drag:over', this[onDragOver]).on('drag:stop', this[onDragStop]);
  }

  /**
   * Destroys Swappable instance.
   */
  destroy() {
    super.destroy();

    this.off('drag:start', this._onDragStart).off('drag:over', this._onDragOver).off('drag:stop', this._onDragStop);
  }

  /**
   * Drag start handler
   * @private
   * @param {DragStartEvent} event - Drag start event
   */
  [onDragStart](event) {
    const swappableStartEvent = new _SwappableEvent.SwappableStartEvent({
      dragEvent: event
    });

    this.trigger(swappableStartEvent);

    if (swappableStartEvent.canceled()) {
      event.cancel();
    }
  }

  /**
   * Drag over handler
   * @private
   * @param {DragOverEvent} event - Drag over event
   */
  [onDragOver](event) {
    if (event.over === event.originalSource || event.over === event.source || event.canceled()) {
      return;
    }

    const swappableSwapEvent = new _SwappableEvent.SwappableSwapEvent({
      dragEvent: event,
      over: event.over,
      overContainer: event.overContainer
    });

    this.trigger(swappableSwapEvent);

    if (swappableSwapEvent.canceled()) {
      return;
    }

    // swap originally swapped element back
    if (this.lastOver && this.lastOver !== event.over) {
      swap(this.lastOver, event.source);
    }

    if (this.lastOver === event.over) {
      this.lastOver = null;
    } else {
      this.lastOver = event.over;
    }

    swap(event.source, event.over);

    const swappableSwappedEvent = new _SwappableEvent.SwappableSwappedEvent({
      dragEvent: event,
      swappedElement: event.over
    });

    this.trigger(swappableSwappedEvent);
  }

  /**
   * Drag stop handler
   * @private
   * @param {DragStopEvent} event - Drag stop event
   */
  [onDragStop](event) {
    const swappableStopEvent = new _SwappableEvent.SwappableStopEvent({
      dragEvent: event
    });

    this.trigger(swappableStopEvent);
    this.lastOver = null;
  }
}

exports.default = Swappable;
function withTempElement(callback) {
  const tmpElement = document.createElement('div');
  callback(tmpElement);
  tmpElement.parentNode.removeChild(tmpElement);
}

function swap(source, over) {
  const overParent = over.parentNode;
  const sourceParent = source.parentNode;

  withTempElement(tmpElement => {
    sourceParent.insertBefore(tmpElement, source);
    overParent.insertBefore(source, over);
    sourceParent.insertBefore(over, tmpElement);
  });
}

/***/ }),
/* 30 */
/***/ (function(module, exports, __nested_webpack_require_59938__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.SwappableStopEvent = exports.SwappableSwappedEvent = exports.SwappableSwapEvent = exports.SwappableStartEvent = exports.SwappableEvent = undefined;

var _AbstractEvent = __nested_webpack_require_59938__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base swappable event
 * @class SwappableEvent
 * @module SwappableEvent
 * @extends AbstractEvent
 */
class SwappableEvent extends _AbstractEvent2.default {

  /**
   * Original drag event that triggered this swappable event
   * @property dragEvent
   * @type {DragEvent}
   * @readonly
   */
  get dragEvent() {
    return this.data.dragEvent;
  }
}

exports.SwappableEvent = SwappableEvent; /**
                                          * Swappable start event
                                          * @class SwappableStartEvent
                                          * @module SwappableStartEvent
                                          * @extends SwappableEvent
                                          */

SwappableEvent.type = 'swappable';
class SwappableStartEvent extends SwappableEvent {}

exports.SwappableStartEvent = SwappableStartEvent; /**
                                                    * Swappable swap event
                                                    * @class SwappableSwapEvent
                                                    * @module SwappableSwapEvent
                                                    * @extends SwappableEvent
                                                    */

SwappableStartEvent.type = 'swappable:start';
SwappableStartEvent.cancelable = true;
class SwappableSwapEvent extends SwappableEvent {

  /**
   * Draggable element you are over
   * @property over
   * @type {HTMLElement}
   * @readonly
   */
  get over() {
    return this.data.over;
  }

  /**
   * Draggable container you are over
   * @property overContainer
   * @type {HTMLElement}
   * @readonly
   */
  get overContainer() {
    return this.data.overContainer;
  }
}

exports.SwappableSwapEvent = SwappableSwapEvent; /**
                                                  * Swappable swapped event
                                                  * @class SwappableSwappedEvent
                                                  * @module SwappableSwappedEvent
                                                  * @extends SwappableEvent
                                                  */

SwappableSwapEvent.type = 'swappable:swap';
SwappableSwapEvent.cancelable = true;
class SwappableSwappedEvent extends SwappableEvent {

  /**
   * The draggable element that you swapped with
   * @property swappedElement
   * @type {HTMLElement}
   * @readonly
   */
  get swappedElement() {
    return this.data.swappedElement;
  }
}

exports.SwappableSwappedEvent = SwappableSwappedEvent; /**
                                                        * Swappable stop event
                                                        * @class SwappableStopEvent
                                                        * @module SwappableStopEvent
                                                        * @extends SwappableEvent
                                                        */

SwappableSwappedEvent.type = 'swappable:swapped';
class SwappableStopEvent extends SwappableEvent {}
exports.SwappableStopEvent = SwappableStopEvent;
SwappableStopEvent.type = 'swappable:stop';

/***/ }),
/* 31 */
/***/ (function(module, exports, __nested_webpack_require_63578__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _SwappableEvent = __nested_webpack_require_63578__(10);

Object.keys(_SwappableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _SwappableEvent[key];
    }
  });
});

var _Swappable = __nested_webpack_require_63578__(29);

var _Swappable2 = _interopRequireDefault(_Swappable);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Swappable2.default;

/***/ }),
/* 32 */
/***/ (function(module, exports, __nested_webpack_require_64267__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _utils = __nested_webpack_require_64267__(2);

var _Draggable = __nested_webpack_require_64267__(5);

var _Draggable2 = _interopRequireDefault(_Draggable);

var _DroppableEvent = __nested_webpack_require_64267__(11);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onDragStart = Symbol('onDragStart');
const onDragMove = Symbol('onDragMove');
const onDragStop = Symbol('onDragStop');
const dropInDropzone = Symbol('dropInDropZone');
const returnToOriginalDropzone = Symbol('returnToOriginalDropzone');
const closestDropzone = Symbol('closestDropzone');
const getDropzones = Symbol('getDropzones');

/**
 * Returns an announcement message when the Draggable element is dropped into a dropzone element
 * @param {DroppableDroppedEvent} droppableEvent
 * @return {String}
 */
function onDroppableDroppedDefaultAnnouncement({ dragEvent, dropzone }) {
  const sourceText = dragEvent.source.textContent.trim() || dragEvent.source.id || 'draggable element';
  const dropzoneText = dropzone.textContent.trim() || dropzone.id || 'droppable element';

  return `Dropped ${sourceText} into ${dropzoneText}`;
}

/**
 * Returns an announcement message when the Draggable element has returned to its original dropzone element
 * @param {DroppableReturnedEvent} droppableEvent
 * @return {String}
 */
function onDroppableReturnedDefaultAnnouncement({ dragEvent, dropzone }) {
  const sourceText = dragEvent.source.textContent.trim() || dragEvent.source.id || 'draggable element';
  const dropzoneText = dropzone.textContent.trim() || dropzone.id || 'droppable element';

  return `Returned ${sourceText} from ${dropzoneText}`;
}

/**
 * @const {Object} defaultAnnouncements
 * @const {Function} defaultAnnouncements['droppable:dropped']
 * @const {Function} defaultAnnouncements['droppable:returned']
 */
const defaultAnnouncements = {
  'droppable:dropped': onDroppableDroppedDefaultAnnouncement,
  'droppable:returned': onDroppableReturnedDefaultAnnouncement
};

const defaultClasses = {
  'droppable:active': 'draggable-dropzone--active',
  'droppable:occupied': 'draggable-dropzone--occupied'
};

const defaultOptions = {
  dropzone: '.draggable-droppable'
};

/**
 * Droppable is built on top of Draggable and allows dropping draggable elements
 * into dropzone element
 * @class Droppable
 * @module Droppable
 * @extends Draggable
 */
class Droppable extends _Draggable2.default {
  /**
   * Droppable constructor.
   * @constructs Droppable
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Droppable containers
   * @param {Object} options - Options for Droppable
   */
  constructor(containers = [], options = {}) {
    super(containers, _extends({}, defaultOptions, options, {
      classes: _extends({}, defaultClasses, options.classes || {}),
      announcements: _extends({}, defaultAnnouncements, options.announcements || {})
    }));

    /**
     * All dropzone elements on drag start
     * @property dropzones
     * @type {HTMLElement[]}
     */
    this.dropzones = null;

    /**
     * Last dropzone element that the source was dropped into
     * @property lastDropzone
     * @type {HTMLElement}
     */
    this.lastDropzone = null;

    /**
     * Initial dropzone element that the source was drag from
     * @property initialDropzone
     * @type {HTMLElement}
     */
    this.initialDropzone = null;

    this[onDragStart] = this[onDragStart].bind(this);
    this[onDragMove] = this[onDragMove].bind(this);
    this[onDragStop] = this[onDragStop].bind(this);

    this.on('drag:start', this[onDragStart]).on('drag:move', this[onDragMove]).on('drag:stop', this[onDragStop]);
  }

  /**
   * Destroys Droppable instance.
   */
  destroy() {
    super.destroy();

    this.off('drag:start', this[onDragStart]).off('drag:move', this[onDragMove]).off('drag:stop', this[onDragStop]);
  }

  /**
   * Drag start handler
   * @private
   * @param {DragStartEvent} event - Drag start event
   */
  [onDragStart](event) {
    if (event.canceled()) {
      return;
    }

    this.dropzones = [...this[getDropzones]()];
    const dropzone = (0, _utils.closest)(event.sensorEvent.target, this.options.dropzone);

    if (!dropzone) {
      event.cancel();
      return;
    }

    const droppableStartEvent = new _DroppableEvent.DroppableStartEvent({
      dragEvent: event,
      dropzone
    });

    this.trigger(droppableStartEvent);

    if (droppableStartEvent.canceled()) {
      event.cancel();
      return;
    }

    this.initialDropzone = dropzone;

    for (const dropzoneElement of this.dropzones) {
      if (dropzoneElement.classList.contains(this.getClassNameFor('droppable:occupied'))) {
        continue;
      }

      dropzoneElement.classList.add(this.getClassNameFor('droppable:active'));
    }
  }

  /**
   * Drag move handler
   * @private
   * @param {DragMoveEvent} event - Drag move event
   */
  [onDragMove](event) {
    if (event.canceled()) {
      return;
    }

    const dropzone = this[closestDropzone](event.sensorEvent.target);
    const overEmptyDropzone = dropzone && !dropzone.classList.contains(this.getClassNameFor('droppable:occupied'));

    if (overEmptyDropzone && this[dropInDropzone](event, dropzone)) {
      this.lastDropzone = dropzone;
    } else if ((!dropzone || dropzone === this.initialDropzone) && this.lastDropzone) {
      this[returnToOriginalDropzone](event);
      this.lastDropzone = null;
    }
  }

  /**
   * Drag stop handler
   * @private
   * @param {DragStopEvent} event - Drag stop event
   */
  [onDragStop](event) {
    const droppableStopEvent = new _DroppableEvent.DroppableStopEvent({
      dragEvent: event,
      dropzone: this.lastDropzone || this.initialDropzone
    });

    this.trigger(droppableStopEvent);

    const occupiedClass = this.getClassNameFor('droppable:occupied');

    for (const dropzone of this.dropzones) {
      dropzone.classList.remove(this.getClassNameFor('droppable:active'));
    }

    if (this.lastDropzone && this.lastDropzone !== this.initialDropzone) {
      this.initialDropzone.classList.remove(occupiedClass);
    }

    this.dropzones = null;
    this.lastDropzone = null;
    this.initialDropzone = null;
  }

  /**
   * Drops a draggable element into a dropzone element
   * @private
   * @param {DragMoveEvent} event - Drag move event
   * @param {HTMLElement} dropzone - Dropzone element to drop draggable into
   */
  [dropInDropzone](event, dropzone) {
    const droppableDroppedEvent = new _DroppableEvent.DroppableDroppedEvent({
      dragEvent: event,
      dropzone
    });

    this.trigger(droppableDroppedEvent);

    if (droppableDroppedEvent.canceled()) {
      return false;
    }

    const occupiedClass = this.getClassNameFor('droppable:occupied');

    if (this.lastDropzone) {
      this.lastDropzone.classList.remove(occupiedClass);
    }

    dropzone.appendChild(event.source);
    dropzone.classList.add(occupiedClass);

    return true;
  }

  /**
   * Moves the previously dropped element back into its original dropzone
   * @private
   * @param {DragMoveEvent} event - Drag move event
   */
  [returnToOriginalDropzone](event) {
    const droppableReturnedEvent = new _DroppableEvent.DroppableReturnedEvent({
      dragEvent: event,
      dropzone: this.lastDropzone
    });

    this.trigger(droppableReturnedEvent);

    if (droppableReturnedEvent.canceled()) {
      return;
    }

    this.initialDropzone.appendChild(event.source);
    this.lastDropzone.classList.remove(this.getClassNameFor('droppable:occupied'));
  }

  /**
   * Returns closest dropzone element for even target
   * @private
   * @param {HTMLElement} target - Event target
   * @return {HTMLElement|null}
   */
  [closestDropzone](target) {
    if (!this.dropzones) {
      return null;
    }

    return (0, _utils.closest)(target, this.dropzones);
  }

  /**
   * Returns all current dropzone elements for this draggable instance
   * @private
   * @return {NodeList|HTMLElement[]|Array}
   */
  [getDropzones]() {
    const dropzone = this.options.dropzone;

    if (typeof dropzone === 'string') {
      return document.querySelectorAll(dropzone);
    } else if (dropzone instanceof NodeList || dropzone instanceof Array) {
      return dropzone;
    } else if (typeof dropzone === 'function') {
      return dropzone();
    } else {
      return [];
    }
  }
}
exports.default = Droppable;

/***/ }),
/* 33 */
/***/ (function(module, exports, __nested_webpack_require_73039__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.DroppableStopEvent = exports.DroppableReturnedEvent = exports.DroppableDroppedEvent = exports.DroppableStartEvent = exports.DroppableEvent = undefined;

var _AbstractEvent = __nested_webpack_require_73039__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base droppable event
 * @class DroppableEvent
 * @module DroppableEvent
 * @extends AbstractEvent
 */
class DroppableEvent extends _AbstractEvent2.default {

  /**
   * Original drag event that triggered this droppable event
   * @property dragEvent
   * @type {DragEvent}
   * @readonly
   */
  get dragEvent() {
    return this.data.dragEvent;
  }
}

exports.DroppableEvent = DroppableEvent; /**
                                          * Droppable start event
                                          * @class DroppableStartEvent
                                          * @module DroppableStartEvent
                                          * @extends DroppableEvent
                                          */

DroppableEvent.type = 'droppable';
class DroppableStartEvent extends DroppableEvent {

  /**
   * The initial dropzone element of the currently dragging draggable element
   * @property dropzone
   * @type {HTMLElement}
   * @readonly
   */
  get dropzone() {
    return this.data.dropzone;
  }
}

exports.DroppableStartEvent = DroppableStartEvent; /**
                                                    * Droppable dropped event
                                                    * @class DroppableDroppedEvent
                                                    * @module DroppableDroppedEvent
                                                    * @extends DroppableEvent
                                                    */

DroppableStartEvent.type = 'droppable:start';
DroppableStartEvent.cancelable = true;
class DroppableDroppedEvent extends DroppableEvent {

  /**
   * The dropzone element you dropped the draggable element into
   * @property dropzone
   * @type {HTMLElement}
   * @readonly
   */
  get dropzone() {
    return this.data.dropzone;
  }
}

exports.DroppableDroppedEvent = DroppableDroppedEvent; /**
                                                        * Droppable returned event
                                                        * @class DroppableReturnedEvent
                                                        * @module DroppableReturnedEvent
                                                        * @extends DroppableEvent
                                                        */

DroppableDroppedEvent.type = 'droppable:dropped';
DroppableDroppedEvent.cancelable = true;
class DroppableReturnedEvent extends DroppableEvent {

  /**
   * The dropzone element you dragged away from
   * @property dropzone
   * @type {HTMLElement}
   * @readonly
   */
  get dropzone() {
    return this.data.dropzone;
  }
}

exports.DroppableReturnedEvent = DroppableReturnedEvent; /**
                                                          * Droppable stop event
                                                          * @class DroppableStopEvent
                                                          * @module DroppableStopEvent
                                                          * @extends DroppableEvent
                                                          */

DroppableReturnedEvent.type = 'droppable:returned';
DroppableReturnedEvent.cancelable = true;
class DroppableStopEvent extends DroppableEvent {

  /**
   * The final dropzone element of the draggable element
   * @property dropzone
   * @type {HTMLElement}
   * @readonly
   */
  get dropzone() {
    return this.data.dropzone;
  }
}
exports.DroppableStopEvent = DroppableStopEvent;
DroppableStopEvent.type = 'droppable:stop';
DroppableStopEvent.cancelable = true;

/***/ }),
/* 34 */
/***/ (function(module, exports, __nested_webpack_require_77075__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _DroppableEvent = __nested_webpack_require_77075__(11);

Object.keys(_DroppableEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _DroppableEvent[key];
    }
  });
});

var _Droppable = __nested_webpack_require_77075__(32);

var _Droppable2 = _interopRequireDefault(_Droppable);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Droppable2.default;

/***/ }),
/* 35 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
/**
 * The Emitter is a simple emitter class that provides you with `on()`, `off()` and `trigger()` methods
 * @class Emitter
 * @module Emitter
 */
class Emitter {
  constructor() {
    this.callbacks = {};
  }

  /**
   * Registers callbacks by event name
   * @param {String} type
   * @param {...Function} callbacks
   */
  on(type, ...callbacks) {
    if (!this.callbacks[type]) {
      this.callbacks[type] = [];
    }

    this.callbacks[type].push(...callbacks);

    return this;
  }

  /**
   * Unregisters callbacks by event name
   * @param {String} type
   * @param {Function} callback
   */
  off(type, callback) {
    if (!this.callbacks[type]) {
      return null;
    }

    const copy = this.callbacks[type].slice(0);

    for (let i = 0; i < copy.length; i++) {
      if (callback === copy[i]) {
        this.callbacks[type].splice(i, 1);
      }
    }

    return this;
  }

  /**
   * Triggers event callbacks by event object
   * @param {AbstractEvent} event
   */
  trigger(event) {
    if (!this.callbacks[event.type]) {
      return null;
    }

    const callbacks = [...this.callbacks[event.type]];
    const caughtErrors = [];

    for (let i = callbacks.length - 1; i >= 0; i--) {
      const callback = callbacks[i];

      try {
        callback(event);
      } catch (error) {
        caughtErrors.push(error);
      }
    }

    if (caughtErrors.length) {
      /* eslint-disable no-console */
      console.error(`Draggable caught errors while triggering '${event.type}'`, caughtErrors);
      /* eslint-disable no-console */
    }

    return this;
  }
}
exports.default = Emitter;

/***/ }),
/* 36 */
/***/ (function(module, exports, __nested_webpack_require_79539__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _Emitter = __nested_webpack_require_79539__(35);

var _Emitter2 = _interopRequireDefault(_Emitter);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Emitter2.default;

/***/ }),
/* 37 */
/***/ (function(module, exports, __nested_webpack_require_79924__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _utils = __nested_webpack_require_79924__(2);

var _Plugins = __nested_webpack_require_79924__(12);

var _Emitter = __nested_webpack_require_79924__(36);

var _Emitter2 = _interopRequireDefault(_Emitter);

var _Sensors = __nested_webpack_require_79924__(6);

var _DraggableEvent = __nested_webpack_require_79924__(13);

var _DragEvent = __nested_webpack_require_79924__(14);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onDragStart = Symbol('onDragStart');
const onDragMove = Symbol('onDragMove');
const onDragStop = Symbol('onDragStop');
const onDragPressure = Symbol('onDragPressure');

/**
 * @const {Object} defaultAnnouncements
 * @const {Function} defaultAnnouncements['drag:start']
 * @const {Function} defaultAnnouncements['drag:stop']
 */
const defaultAnnouncements = {
  'drag:start': event => `Picked up ${event.source.textContent.trim() || event.source.id || 'draggable element'}`,
  'drag:stop': event => `Released ${event.source.textContent.trim() || event.source.id || 'draggable element'}`
};

const defaultClasses = {
  'container:dragging': 'draggable-container--is-dragging',
  'source:dragging': 'draggable-source--is-dragging',
  'source:placed': 'draggable-source--placed',
  'container:placed': 'draggable-container--placed',
  'body:dragging': 'draggable--is-dragging',
  'draggable:over': 'draggable--over',
  'container:over': 'draggable-container--over',
  'source:original': 'draggable--original',
  mirror: 'draggable-mirror'
};

const defaultOptions = exports.defaultOptions = {
  draggable: '.draggable-source',
  handle: null,
  delay: 100,
  placedTimeout: 800,
  plugins: [],
  sensors: []
};

/**
 * This is the core draggable library that does the heavy lifting
 * @class Draggable
 * @module Draggable
 */
class Draggable {

  /**
   * Draggable constructor.
   * @constructs Draggable
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Draggable containers
   * @param {Object} options - Options for draggable
   */
  constructor(containers = [document.body], options = {}) {
    /**
     * Draggable containers
     * @property containers
     * @type {HTMLElement[]}
     */
    if (containers instanceof NodeList || containers instanceof Array) {
      this.containers = [...containers];
    } else if (containers instanceof HTMLElement) {
      this.containers = [containers];
    } else {
      throw new Error('Draggable containers are expected to be of type `NodeList`, `HTMLElement[]` or `HTMLElement`');
    }

    this.options = _extends({}, defaultOptions, options, {
      classes: _extends({}, defaultClasses, options.classes || {}),
      announcements: _extends({}, defaultAnnouncements, options.announcements || {})
    });

    /**
     * Draggables event emitter
     * @property emitter
     * @type {Emitter}
     */
    this.emitter = new _Emitter2.default();

    /**
     * Current drag state
     * @property dragging
     * @type {Boolean}
     */
    this.dragging = false;

    /**
     * Active plugins
     * @property plugins
     * @type {Plugin[]}
     */
    this.plugins = [];

    /**
     * Active sensors
     * @property sensors
     * @type {Sensor[]}
     */
    this.sensors = [];

    this[onDragStart] = this[onDragStart].bind(this);
    this[onDragMove] = this[onDragMove].bind(this);
    this[onDragStop] = this[onDragStop].bind(this);
    this[onDragPressure] = this[onDragPressure].bind(this);

    document.addEventListener('drag:start', this[onDragStart], true);
    document.addEventListener('drag:move', this[onDragMove], true);
    document.addEventListener('drag:stop', this[onDragStop], true);
    document.addEventListener('drag:pressure', this[onDragPressure], true);

    const defaultPlugins = Object.values(Draggable.Plugins).map(Plugin => Plugin);
    const defaultSensors = [_Sensors.MouseSensor, _Sensors.TouchSensor];

    this.addPlugin(...[...defaultPlugins, ...this.options.plugins]);
    this.addSensor(...[...defaultSensors, ...this.options.sensors]);

    const draggableInitializedEvent = new _DraggableEvent.DraggableInitializedEvent({
      draggable: this
    });

    this.on('mirror:created', ({ mirror }) => this.mirror = mirror);
    this.on('mirror:destroy', () => this.mirror = null);

    this.trigger(draggableInitializedEvent);
  }

  /**
   * Destroys Draggable instance. This removes all internal event listeners and
   * deactivates sensors and plugins
   */

  /**
   * Default plugins draggable uses
   * @static
   * @property {Object} Plugins
   * @property {Announcement} Plugins.Announcement
   * @property {Focusable} Plugins.Focusable
   * @property {Mirror} Plugins.Mirror
   * @property {Scrollable} Plugins.Scrollable
   * @type {Object}
   */
  destroy() {
    document.removeEventListener('drag:start', this[onDragStart], true);
    document.removeEventListener('drag:move', this[onDragMove], true);
    document.removeEventListener('drag:stop', this[onDragStop], true);
    document.removeEventListener('drag:pressure', this[onDragPressure], true);

    const draggableDestroyEvent = new _DraggableEvent.DraggableDestroyEvent({
      draggable: this
    });

    this.trigger(draggableDestroyEvent);

    this.removePlugin(...this.plugins.map(plugin => plugin.constructor));
    this.removeSensor(...this.sensors.map(sensor => sensor.constructor));
  }

  /**
   * Adds plugin to this draggable instance. This will end up calling the attach method of the plugin
   * @param {...typeof Plugin} plugins - Plugins that you want attached to draggable
   * @return {Draggable}
   * @example draggable.addPlugin(CustomA11yPlugin, CustomMirrorPlugin)
   */
  addPlugin(...plugins) {
    const activePlugins = plugins.map(Plugin => new Plugin(this));

    activePlugins.forEach(plugin => plugin.attach());
    this.plugins = [...this.plugins, ...activePlugins];

    return this;
  }

  /**
   * Removes plugins that are already attached to this draggable instance. This will end up calling
   * the detach method of the plugin
   * @param {...typeof Plugin} plugins - Plugins that you want detached from draggable
   * @return {Draggable}
   * @example draggable.removePlugin(MirrorPlugin, CustomMirrorPlugin)
   */
  removePlugin(...plugins) {
    const removedPlugins = this.plugins.filter(plugin => plugins.includes(plugin.constructor));

    removedPlugins.forEach(plugin => plugin.detach());
    this.plugins = this.plugins.filter(plugin => !plugins.includes(plugin.constructor));

    return this;
  }

  /**
   * Adds sensors to this draggable instance. This will end up calling the attach method of the sensor
   * @param {...typeof Sensor} sensors - Sensors that you want attached to draggable
   * @return {Draggable}
   * @example draggable.addSensor(ForceTouchSensor, CustomSensor)
   */
  addSensor(...sensors) {
    const activeSensors = sensors.map(Sensor => new Sensor(this.containers, this.options));

    activeSensors.forEach(sensor => sensor.attach());
    this.sensors = [...this.sensors, ...activeSensors];

    return this;
  }

  /**
   * Removes sensors that are already attached to this draggable instance. This will end up calling
   * the detach method of the sensor
   * @param {...typeof Sensor} sensors - Sensors that you want attached to draggable
   * @return {Draggable}
   * @example draggable.removeSensor(TouchSensor, DragSensor)
   */
  removeSensor(...sensors) {
    const removedSensors = this.sensors.filter(sensor => sensors.includes(sensor.constructor));

    removedSensors.forEach(sensor => sensor.detach());
    this.sensors = this.sensors.filter(sensor => !sensors.includes(sensor.constructor));

    return this;
  }

  /**
   * Adds container to this draggable instance
   * @param {...HTMLElement} containers - Containers you want to add to draggable
   * @return {Draggable}
   * @example draggable.addContainer(document.body)
   */
  addContainer(...containers) {
    this.containers = [...this.containers, ...containers];
    this.sensors.forEach(sensor => sensor.addContainer(...containers));
    return this;
  }

  /**
   * Removes container from this draggable instance
   * @param {...HTMLElement} containers - Containers you want to remove from draggable
   * @return {Draggable}
   * @example draggable.removeContainer(document.body)
   */
  removeContainer(...containers) {
    this.containers = this.containers.filter(container => !containers.includes(container));
    this.sensors.forEach(sensor => sensor.removeContainer(...containers));
    return this;
  }

  /**
   * Adds listener for draggable events
   * @param {String} type - Event name
   * @param {...Function} callbacks - Event callbacks
   * @return {Draggable}
   * @example draggable.on('drag:start', (dragEvent) => dragEvent.cancel());
   */
  on(type, ...callbacks) {
    this.emitter.on(type, ...callbacks);
    return this;
  }

  /**
   * Removes listener from draggable
   * @param {String} type - Event name
   * @param {Function} callback - Event callback
   * @return {Draggable}
   * @example draggable.off('drag:start', handlerFunction);
   */
  off(type, callback) {
    this.emitter.off(type, callback);
    return this;
  }

  /**
   * Triggers draggable event
   * @param {AbstractEvent} event - Event instance
   * @return {Draggable}
   * @example draggable.trigger(event);
   */
  trigger(event) {
    this.emitter.trigger(event);
    return this;
  }

  /**
   * Returns class name for class identifier
   * @param {String} name - Name of class identifier
   * @return {String|null}
   */
  getClassNameFor(name) {
    return this.options.classes[name];
  }

  /**
   * Returns true if this draggable instance is currently dragging
   * @return {Boolean}
   */
  isDragging() {
    return Boolean(this.dragging);
  }

  /**
   * Returns all draggable elements
   * @return {HTMLElement[]}
   */
  getDraggableElements() {
    return this.containers.reduce((current, container) => {
      return [...current, ...this.getDraggableElementsForContainer(container)];
    }, []);
  }

  /**
   * Returns draggable elements for a given container, excluding the mirror and
   * original source element if present
   * @param {HTMLElement} container
   * @return {HTMLElement[]}
   */
  getDraggableElementsForContainer(container) {
    const allDraggableElements = container.querySelectorAll(this.options.draggable);

    return [...allDraggableElements].filter(childElement => {
      return childElement !== this.originalSource && childElement !== this.mirror;
    });
  }

  /**
   * Drag start handler
   * @private
   * @param {Event} event - DOM Drag event
   */
  [onDragStart](event) {
    const sensorEvent = getSensorEvent(event);
    const { target, container } = sensorEvent;

    if (!this.containers.includes(container)) {
      return;
    }

    if (this.options.handle && target && !(0, _utils.closest)(target, this.options.handle)) {
      sensorEvent.cancel();
      return;
    }

    // Find draggable source element
    this.originalSource = (0, _utils.closest)(target, this.options.draggable);
    this.sourceContainer = container;

    if (!this.originalSource) {
      sensorEvent.cancel();
      return;
    }

    if (this.lastPlacedSource && this.lastPlacedContainer) {
      clearTimeout(this.placedTimeoutID);
      this.lastPlacedSource.classList.remove(this.getClassNameFor('source:placed'));
      this.lastPlacedContainer.classList.remove(this.getClassNameFor('container:placed'));
    }

    this.source = this.originalSource.cloneNode(true);
    this.originalSource.parentNode.insertBefore(this.source, this.originalSource);
    this.originalSource.style.display = 'none';

    const dragEvent = new _DragEvent.DragStartEvent({
      source: this.source,
      originalSource: this.originalSource,
      sourceContainer: container,
      sensorEvent
    });

    this.trigger(dragEvent);

    this.dragging = !dragEvent.canceled();

    if (dragEvent.canceled()) {
      this.source.parentNode.removeChild(this.source);
      this.originalSource.style.display = null;
      return;
    }

    this.originalSource.classList.add(this.getClassNameFor('source:original'));
    this.source.classList.add(this.getClassNameFor('source:dragging'));
    this.sourceContainer.classList.add(this.getClassNameFor('container:dragging'));
    document.body.classList.add(this.getClassNameFor('body:dragging'));
    applyUserSelect(document.body, 'none');

    requestAnimationFrame(() => {
      const oldSensorEvent = getSensorEvent(event);
      const newSensorEvent = oldSensorEvent.clone({ target: this.source });

      this[onDragMove](_extends({}, event, {
        detail: newSensorEvent
      }));
    });
  }

  /**
   * Drag move handler
   * @private
   * @param {Event} event - DOM Drag event
   */
  [onDragMove](event) {
    if (!this.dragging) {
      return;
    }

    const sensorEvent = getSensorEvent(event);
    const { container } = sensorEvent;
    let target = sensorEvent.target;

    const dragMoveEvent = new _DragEvent.DragMoveEvent({
      source: this.source,
      originalSource: this.originalSource,
      sourceContainer: container,
      sensorEvent
    });

    this.trigger(dragMoveEvent);

    if (dragMoveEvent.canceled()) {
      sensorEvent.cancel();
    }

    target = (0, _utils.closest)(target, this.options.draggable);
    const withinCorrectContainer = (0, _utils.closest)(sensorEvent.target, this.containers);
    const overContainer = sensorEvent.overContainer || withinCorrectContainer;
    const isLeavingContainer = this.currentOverContainer && overContainer !== this.currentOverContainer;
    const isLeavingDraggable = this.currentOver && target !== this.currentOver;
    const isOverContainer = overContainer && this.currentOverContainer !== overContainer;
    const isOverDraggable = withinCorrectContainer && target && this.currentOver !== target;

    if (isLeavingDraggable) {
      const dragOutEvent = new _DragEvent.DragOutEvent({
        source: this.source,
        originalSource: this.originalSource,
        sourceContainer: container,
        sensorEvent,
        over: this.currentOver
      });

      this.currentOver.classList.remove(this.getClassNameFor('draggable:over'));
      this.currentOver = null;

      this.trigger(dragOutEvent);
    }

    if (isLeavingContainer) {
      const dragOutContainerEvent = new _DragEvent.DragOutContainerEvent({
        source: this.source,
        originalSource: this.originalSource,
        sourceContainer: container,
        sensorEvent,
        overContainer: this.currentOverContainer
      });

      this.currentOverContainer.classList.remove(this.getClassNameFor('container:over'));
      this.currentOverContainer = null;

      this.trigger(dragOutContainerEvent);
    }

    if (isOverContainer) {
      overContainer.classList.add(this.getClassNameFor('container:over'));

      const dragOverContainerEvent = new _DragEvent.DragOverContainerEvent({
        source: this.source,
        originalSource: this.originalSource,
        sourceContainer: container,
        sensorEvent,
        overContainer
      });

      this.currentOverContainer = overContainer;

      this.trigger(dragOverContainerEvent);
    }

    if (isOverDraggable) {
      target.classList.add(this.getClassNameFor('draggable:over'));

      const dragOverEvent = new _DragEvent.DragOverEvent({
        source: this.source,
        originalSource: this.originalSource,
        sourceContainer: container,
        sensorEvent,
        overContainer,
        over: target
      });

      this.currentOver = target;

      this.trigger(dragOverEvent);
    }
  }

  /**
   * Drag stop handler
   * @private
   * @param {Event} event - DOM Drag event
   */
  [onDragStop](event) {
    if (!this.dragging) {
      return;
    }

    this.dragging = false;

    const dragStopEvent = new _DragEvent.DragStopEvent({
      source: this.source,
      originalSource: this.originalSource,
      sensorEvent: event.sensorEvent,
      sourceContainer: this.sourceContainer
    });

    this.trigger(dragStopEvent);

    this.source.parentNode.insertBefore(this.originalSource, this.source);
    this.source.parentNode.removeChild(this.source);
    this.originalSource.style.display = '';

    this.source.classList.remove(this.getClassNameFor('source:dragging'));
    this.originalSource.classList.remove(this.getClassNameFor('source:original'));
    this.originalSource.classList.add(this.getClassNameFor('source:placed'));
    this.sourceContainer.classList.add(this.getClassNameFor('container:placed'));
    this.sourceContainer.classList.remove(this.getClassNameFor('container:dragging'));
    document.body.classList.remove(this.getClassNameFor('body:dragging'));
    applyUserSelect(document.body, '');

    if (this.currentOver) {
      this.currentOver.classList.remove(this.getClassNameFor('draggable:over'));
    }

    if (this.currentOverContainer) {
      this.currentOverContainer.classList.remove(this.getClassNameFor('container:over'));
    }

    this.lastPlacedSource = this.originalSource;
    this.lastPlacedContainer = this.sourceContainer;

    this.placedTimeoutID = setTimeout(() => {
      if (this.lastPlacedSource) {
        this.lastPlacedSource.classList.remove(this.getClassNameFor('source:placed'));
      }

      if (this.lastPlacedContainer) {
        this.lastPlacedContainer.classList.remove(this.getClassNameFor('container:placed'));
      }

      this.lastPlacedSource = null;
      this.lastPlacedContainer = null;
    }, this.options.placedTimeout);

    this.source = null;
    this.originalSource = null;
    this.currentOverContainer = null;
    this.currentOver = null;
    this.sourceContainer = null;
  }

  /**
   * Drag pressure handler
   * @private
   * @param {Event} event - DOM Drag event
   */
  [onDragPressure](event) {
    if (!this.dragging) {
      return;
    }

    const sensorEvent = getSensorEvent(event);
    const source = this.source || (0, _utils.closest)(sensorEvent.originalEvent.target, this.options.draggable);

    const dragPressureEvent = new _DragEvent.DragPressureEvent({
      sensorEvent,
      source,
      pressure: sensorEvent.pressure
    });

    this.trigger(dragPressureEvent);
  }
}

exports.default = Draggable;
Draggable.Plugins = { Announcement: _Plugins.Announcement, Focusable: _Plugins.Focusable, Mirror: _Plugins.Mirror, Scrollable: _Plugins.Scrollable };
function getSensorEvent(event) {
  return event.detail;
}

function applyUserSelect(element, value) {
  element.style.webkitUserSelect = value;
  element.style.mozUserSelect = value;
  element.style.msUserSelect = value;
  element.style.oUserSelect = value;
  element.style.userSelect = value;
}

/***/ }),
/* 38 */
/***/ (function(module, exports, __nested_webpack_require_99003__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _Sensor = __nested_webpack_require_99003__(4);

var _Sensor2 = _interopRequireDefault(_Sensor);

var _SensorEvent = __nested_webpack_require_99003__(3);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onMouseForceWillBegin = Symbol('onMouseForceWillBegin');
const onMouseForceDown = Symbol('onMouseForceDown');
const onMouseDown = Symbol('onMouseDown');
const onMouseForceChange = Symbol('onMouseForceChange');
const onMouseMove = Symbol('onMouseMove');
const onMouseUp = Symbol('onMouseUp');
const onMouseForceGlobalChange = Symbol('onMouseForceGlobalChange');

/**
 * This sensor picks up native force touch events and dictates drag operations
 * @class ForceTouchSensor
 * @module ForceTouchSensor
 * @extends Sensor
 */
class ForceTouchSensor extends _Sensor2.default {
  /**
   * ForceTouchSensor constructor.
   * @constructs ForceTouchSensor
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Containers
   * @param {Object} options - Options
   */
  constructor(containers = [], options = {}) {
    super(containers, options);

    /**
     * Draggable element needs to be remembered to unset the draggable attribute after drag operation has completed
     * @property mightDrag
     * @type {Boolean}
     */
    this.mightDrag = false;

    this[onMouseForceWillBegin] = this[onMouseForceWillBegin].bind(this);
    this[onMouseForceDown] = this[onMouseForceDown].bind(this);
    this[onMouseDown] = this[onMouseDown].bind(this);
    this[onMouseForceChange] = this[onMouseForceChange].bind(this);
    this[onMouseMove] = this[onMouseMove].bind(this);
    this[onMouseUp] = this[onMouseUp].bind(this);
  }

  /**
   * Attaches sensors event listeners to the DOM
   */
  attach() {
    for (const container of this.containers) {
      container.addEventListener('webkitmouseforcewillbegin', this[onMouseForceWillBegin], false);
      container.addEventListener('webkitmouseforcedown', this[onMouseForceDown], false);
      container.addEventListener('mousedown', this[onMouseDown], true);
      container.addEventListener('webkitmouseforcechanged', this[onMouseForceChange], false);
    }

    document.addEventListener('mousemove', this[onMouseMove]);
    document.addEventListener('mouseup', this[onMouseUp]);
  }

  /**
   * Detaches sensors event listeners to the DOM
   */
  detach() {
    for (const container of this.containers) {
      container.removeEventListener('webkitmouseforcewillbegin', this[onMouseForceWillBegin], false);
      container.removeEventListener('webkitmouseforcedown', this[onMouseForceDown], false);
      container.removeEventListener('mousedown', this[onMouseDown], true);
      container.removeEventListener('webkitmouseforcechanged', this[onMouseForceChange], false);
    }

    document.removeEventListener('mousemove', this[onMouseMove]);
    document.removeEventListener('mouseup', this[onMouseUp]);
  }

  /**
   * Mouse force will begin handler
   * @private
   * @param {Event} event - Mouse force will begin event
   */
  [onMouseForceWillBegin](event) {
    event.preventDefault();
    this.mightDrag = true;
  }

  /**
   * Mouse force down handler
   * @private
   * @param {Event} event - Mouse force down event
   */
  [onMouseForceDown](event) {
    if (this.dragging) {
      return;
    }

    const target = document.elementFromPoint(event.clientX, event.clientY);
    const container = event.currentTarget;

    const dragStartEvent = new _SensorEvent.DragStartSensorEvent({
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container,
      originalEvent: event
    });

    this.trigger(container, dragStartEvent);

    this.currentContainer = container;
    this.dragging = !dragStartEvent.canceled();
    this.mightDrag = false;
  }

  /**
   * Mouse up handler
   * @private
   * @param {Event} event - Mouse up event
   */
  [onMouseUp](event) {
    if (!this.dragging) {
      return;
    }

    const dragStopEvent = new _SensorEvent.DragStopSensorEvent({
      clientX: event.clientX,
      clientY: event.clientY,
      target: null,
      container: this.currentContainer,
      originalEvent: event
    });

    this.trigger(this.currentContainer, dragStopEvent);

    this.currentContainer = null;
    this.dragging = false;
    this.mightDrag = false;
  }

  /**
   * Mouse down handler
   * @private
   * @param {Event} event - Mouse down event
   */
  [onMouseDown](event) {
    if (!this.mightDrag) {
      return;
    }

    // Need workaround for real click
    // Cancel potential drag events
    event.stopPropagation();
    event.stopImmediatePropagation();
    event.preventDefault();
  }

  /**
   * Mouse move handler
   * @private
   * @param {Event} event - Mouse force will begin event
   */
  [onMouseMove](event) {
    if (!this.dragging) {
      return;
    }

    const target = document.elementFromPoint(event.clientX, event.clientY);

    const dragMoveEvent = new _SensorEvent.DragMoveSensorEvent({
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container: this.currentContainer,
      originalEvent: event
    });

    this.trigger(this.currentContainer, dragMoveEvent);
  }

  /**
   * Mouse force change handler
   * @private
   * @param {Event} event - Mouse force change event
   */
  [onMouseForceChange](event) {
    if (this.dragging) {
      return;
    }

    const target = event.target;
    const container = event.currentTarget;

    const dragPressureEvent = new _SensorEvent.DragPressureSensorEvent({
      pressure: event.webkitForce,
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container,
      originalEvent: event
    });

    this.trigger(container, dragPressureEvent);
  }

  /**
   * Mouse force global change handler
   * @private
   * @param {Event} event - Mouse force global change event
   */
  [onMouseForceGlobalChange](event) {
    if (!this.dragging) {
      return;
    }

    const target = event.target;

    const dragPressureEvent = new _SensorEvent.DragPressureSensorEvent({
      pressure: event.webkitForce,
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container: this.currentContainer,
      originalEvent: event
    });

    this.trigger(this.currentContainer, dragPressureEvent);
  }
}
exports.default = ForceTouchSensor;

/***/ }),
/* 39 */
/***/ (function(module, exports, __nested_webpack_require_105501__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _ForceTouchSensor = __nested_webpack_require_105501__(38);

var _ForceTouchSensor2 = _interopRequireDefault(_ForceTouchSensor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _ForceTouchSensor2.default;

/***/ }),
/* 40 */
/***/ (function(module, exports, __nested_webpack_require_105922__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _utils = __nested_webpack_require_105922__(2);

var _Sensor = __nested_webpack_require_105922__(4);

var _Sensor2 = _interopRequireDefault(_Sensor);

var _SensorEvent = __nested_webpack_require_105922__(3);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onMouseDown = Symbol('onMouseDown');
const onMouseUp = Symbol('onMouseUp');
const onDragStart = Symbol('onDragStart');
const onDragOver = Symbol('onDragOver');
const onDragEnd = Symbol('onDragEnd');
const onDrop = Symbol('onDrop');
const reset = Symbol('reset');

/**
 * This sensor picks up native browser drag events and dictates drag operations
 * @class DragSensor
 * @module DragSensor
 * @extends Sensor
 */
class DragSensor extends _Sensor2.default {
  /**
   * DragSensor constructor.
   * @constructs DragSensor
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Containers
   * @param {Object} options - Options
   */
  constructor(containers = [], options = {}) {
    super(containers, options);

    /**
     * Mouse down timer which will end up setting the draggable attribute, unless canceled
     * @property mouseDownTimeout
     * @type {Number}
     */
    this.mouseDownTimeout = null;

    /**
     * Draggable element needs to be remembered to unset the draggable attribute after drag operation has completed
     * @property draggableElement
     * @type {HTMLElement}
     */
    this.draggableElement = null;

    /**
     * Native draggable element could be links or images, their draggable state will be disabled during drag operation
     * @property nativeDraggableElement
     * @type {HTMLElement}
     */
    this.nativeDraggableElement = null;

    this[onMouseDown] = this[onMouseDown].bind(this);
    this[onMouseUp] = this[onMouseUp].bind(this);
    this[onDragStart] = this[onDragStart].bind(this);
    this[onDragOver] = this[onDragOver].bind(this);
    this[onDragEnd] = this[onDragEnd].bind(this);
    this[onDrop] = this[onDrop].bind(this);
  }

  /**
   * Attaches sensors event listeners to the DOM
   */
  attach() {
    document.addEventListener('mousedown', this[onMouseDown], true);
  }

  /**
   * Detaches sensors event listeners to the DOM
   */
  detach() {
    document.removeEventListener('mousedown', this[onMouseDown], true);
  }

  /**
   * Drag start handler
   * @private
   * @param {Event} event - Drag start event
   */
  [onDragStart](event) {
    // Need for firefox. "text" key is needed for IE
    event.dataTransfer.setData('text', '');
    event.dataTransfer.effectAllowed = this.options.type;

    const target = document.elementFromPoint(event.clientX, event.clientY);
    this.currentContainer = (0, _utils.closest)(event.target, this.containers);

    if (!this.currentContainer) {
      return;
    }

    const dragStartEvent = new _SensorEvent.DragStartSensorEvent({
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container: this.currentContainer,
      originalEvent: event
    });

    // Workaround
    setTimeout(() => {
      this.trigger(this.currentContainer, dragStartEvent);

      if (dragStartEvent.canceled()) {
        this.dragging = false;
      } else {
        this.dragging = true;
      }
    }, 0);
  }

  /**
   * Drag over handler
   * @private
   * @param {Event} event - Drag over event
   */
  [onDragOver](event) {
    if (!this.dragging) {
      return;
    }

    const target = document.elementFromPoint(event.clientX, event.clientY);
    const container = this.currentContainer;

    const dragMoveEvent = new _SensorEvent.DragMoveSensorEvent({
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container,
      originalEvent: event
    });

    this.trigger(container, dragMoveEvent);

    if (!dragMoveEvent.canceled()) {
      event.preventDefault();
      event.dataTransfer.dropEffect = this.options.type;
    }
  }

  /**
   * Drag end handler
   * @private
   * @param {Event} event - Drag end event
   */
  [onDragEnd](event) {
    if (!this.dragging) {
      return;
    }

    document.removeEventListener('mouseup', this[onMouseUp], true);

    const target = document.elementFromPoint(event.clientX, event.clientY);
    const container = this.currentContainer;

    const dragStopEvent = new _SensorEvent.DragStopSensorEvent({
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container,
      originalEvent: event
    });

    this.trigger(container, dragStopEvent);

    this.dragging = false;

    this[reset]();
  }

  /**
   * Drop handler
   * @private
   * @param {Event} event - Drop event
   */
  [onDrop](event) {
    // eslint-disable-line class-methods-use-this
    event.preventDefault();
  }

  /**
   * Mouse down handler
   * @private
   * @param {Event} event - Mouse down event
   */
  [onMouseDown](event) {
    // Firefox bug for inputs within draggables https://bugzilla.mozilla.org/show_bug.cgi?id=739071
    if (event.target && (event.target.form || event.target.contenteditable)) {
      return;
    }

    const nativeDraggableElement = (0, _utils.closest)(event.target, element => element.draggable);

    if (nativeDraggableElement) {
      nativeDraggableElement.draggable = false;
      this.nativeDraggableElement = nativeDraggableElement;
    }

    document.addEventListener('mouseup', this[onMouseUp], true);
    document.addEventListener('dragstart', this[onDragStart], false);
    document.addEventListener('dragover', this[onDragOver], false);
    document.addEventListener('dragend', this[onDragEnd], false);
    document.addEventListener('drop', this[onDrop], false);

    const target = (0, _utils.closest)(event.target, this.options.draggable);

    if (!target) {
      return;
    }

    this.mouseDownTimeout = setTimeout(() => {
      target.draggable = true;
      this.draggableElement = target;
    }, this.options.delay);
  }

  /**
   * Mouse up handler
   * @private
   * @param {Event} event - Mouse up event
   */
  [onMouseUp]() {
    this[reset]();
  }

  /**
   * Mouse up handler
   * @private
   * @param {Event} event - Mouse up event
   */
  [reset]() {
    clearTimeout(this.mouseDownTimeout);

    document.removeEventListener('mouseup', this[onMouseUp], true);
    document.removeEventListener('dragstart', this[onDragStart], false);
    document.removeEventListener('dragover', this[onDragOver], false);
    document.removeEventListener('dragend', this[onDragEnd], false);
    document.removeEventListener('drop', this[onDrop], false);

    if (this.nativeDraggableElement) {
      this.nativeDraggableElement.draggable = true;
      this.nativeDraggableElement = null;
    }

    if (this.draggableElement) {
      this.draggableElement.draggable = false;
      this.draggableElement = null;
    }
  }
}
exports.default = DragSensor;

/***/ }),
/* 41 */
/***/ (function(module, exports, __nested_webpack_require_112871__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _DragSensor = __nested_webpack_require_112871__(40);

var _DragSensor2 = _interopRequireDefault(_DragSensor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _DragSensor2.default;

/***/ }),
/* 42 */
/***/ (function(module, exports, __nested_webpack_require_113268__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _utils = __nested_webpack_require_113268__(2);

var _Sensor = __nested_webpack_require_113268__(4);

var _Sensor2 = _interopRequireDefault(_Sensor);

var _SensorEvent = __nested_webpack_require_113268__(3);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onTouchStart = Symbol('onTouchStart');
const onTouchHold = Symbol('onTouchHold');
const onTouchEnd = Symbol('onTouchEnd');
const onTouchMove = Symbol('onTouchMove');

/**
 * Prevents scrolling when set to true
 * @var {Boolean} preventScrolling
 */
let preventScrolling = false;

// WebKit requires cancelable `touchmove` events to be added as early as possible
window.addEventListener('touchmove', event => {
  if (!preventScrolling) {
    return;
  }

  // Prevent scrolling
  event.preventDefault();
}, { passive: false });

/**
 * This sensor picks up native browser touch events and dictates drag operations
 * @class TouchSensor
 * @module TouchSensor
 * @extends Sensor
 */
class TouchSensor extends _Sensor2.default {
  /**
   * TouchSensor constructor.
   * @constructs TouchSensor
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Containers
   * @param {Object} options - Options
   */
  constructor(containers = [], options = {}) {
    super(containers, options);

    /**
     * Closest scrollable container so accidental scroll can cancel long touch
     * @property currentScrollableParent
     * @type {HTMLElement}
     */
    this.currentScrollableParent = null;

    /**
     * TimeoutID for long touch
     * @property tapTimeout
     * @type {Number}
     */
    this.tapTimeout = null;

    /**
     * touchMoved indicates if touch has moved during tapTimeout
     * @property touchMoved
     * @type {Boolean}
     */
    this.touchMoved = false;

    this[onTouchStart] = this[onTouchStart].bind(this);
    this[onTouchHold] = this[onTouchHold].bind(this);
    this[onTouchEnd] = this[onTouchEnd].bind(this);
    this[onTouchMove] = this[onTouchMove].bind(this);
  }

  /**
   * Attaches sensors event listeners to the DOM
   */
  attach() {
    document.addEventListener('touchstart', this[onTouchStart]);
  }

  /**
   * Detaches sensors event listeners to the DOM
   */
  detach() {
    document.removeEventListener('touchstart', this[onTouchStart]);
  }

  /**
   * Touch start handler
   * @private
   * @param {Event} event - Touch start event
   */
  [onTouchStart](event) {
    const container = (0, _utils.closest)(event.target, this.containers);

    if (!container) {
      return;
    }

    document.addEventListener('touchmove', this[onTouchMove]);
    document.addEventListener('touchend', this[onTouchEnd]);
    document.addEventListener('touchcancel', this[onTouchEnd]);
    container.addEventListener('contextmenu', onContextMenu);

    this.currentContainer = container;
    this.tapTimeout = setTimeout(this[onTouchHold](event, container), this.options.delay);
  }

  /**
   * Touch hold handler
   * @private
   * @param {Event} event - Touch start event
   * @param {HTMLElement} container - Container element
   */
  [onTouchHold](event, container) {
    return () => {
      if (this.touchMoved) {
        return;
      }

      const touch = event.touches[0] || event.changedTouches[0];
      const target = event.target;

      const dragStartEvent = new _SensorEvent.DragStartSensorEvent({
        clientX: touch.pageX,
        clientY: touch.pageY,
        target,
        container,
        originalEvent: event
      });

      this.trigger(container, dragStartEvent);

      this.dragging = !dragStartEvent.canceled();
      preventScrolling = this.dragging;
    };
  }

  /**
   * Touch move handler
   * @private
   * @param {Event} event - Touch move event
   */
  [onTouchMove](event) {
    this.touchMoved = true;

    if (!this.dragging) {
      return;
    }

    const touch = event.touches[0] || event.changedTouches[0];
    const target = document.elementFromPoint(touch.pageX - window.scrollX, touch.pageY - window.scrollY);

    const dragMoveEvent = new _SensorEvent.DragMoveSensorEvent({
      clientX: touch.pageX,
      clientY: touch.pageY,
      target,
      container: this.currentContainer,
      originalEvent: event
    });

    this.trigger(this.currentContainer, dragMoveEvent);
  }

  /**
   * Touch end handler
   * @private
   * @param {Event} event - Touch end event
   */
  [onTouchEnd](event) {
    this.touchMoved = false;
    preventScrolling = false;

    document.removeEventListener('touchend', this[onTouchEnd]);
    document.removeEventListener('touchcancel', this[onTouchEnd]);
    document.removeEventListener('touchmove', this[onTouchMove]);

    if (this.currentContainer) {
      this.currentContainer.removeEventListener('contextmenu', onContextMenu);
    }

    clearTimeout(this.tapTimeout);

    if (!this.dragging) {
      return;
    }

    const touch = event.touches[0] || event.changedTouches[0];
    const target = document.elementFromPoint(touch.pageX - window.scrollX, touch.pageY - window.scrollY);

    event.preventDefault();

    const dragStopEvent = new _SensorEvent.DragStopSensorEvent({
      clientX: touch.pageX,
      clientY: touch.pageY,
      target,
      container: this.currentContainer,
      originalEvent: event
    });

    this.trigger(this.currentContainer, dragStopEvent);

    this.currentContainer = null;
    this.dragging = false;
  }
}

exports.default = TouchSensor;
function onContextMenu(event) {
  event.preventDefault();
  event.stopPropagation();
}

/***/ }),
/* 43 */
/***/ (function(module, exports, __nested_webpack_require_118906__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _TouchSensor = __nested_webpack_require_118906__(42);

var _TouchSensor2 = _interopRequireDefault(_TouchSensor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _TouchSensor2.default;

/***/ }),
/* 44 */
/***/ (function(module, exports, __nested_webpack_require_119307__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.DragPressureSensorEvent = exports.DragStopSensorEvent = exports.DragMoveSensorEvent = exports.DragStartSensorEvent = exports.SensorEvent = undefined;

var _AbstractEvent = __nested_webpack_require_119307__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base sensor event
 * @class SensorEvent
 * @module SensorEvent
 * @extends AbstractEvent
 */
class SensorEvent extends _AbstractEvent2.default {
  /**
   * Original browser event that triggered a sensor
   * @property originalEvent
   * @type {Event}
   * @readonly
   */
  get originalEvent() {
    return this.data.originalEvent;
  }

  /**
   * Normalized clientX for both touch and mouse events
   * @property clientX
   * @type {Number}
   * @readonly
   */
  get clientX() {
    return this.data.clientX;
  }

  /**
   * Normalized clientY for both touch and mouse events
   * @property clientY
   * @type {Number}
   * @readonly
   */
  get clientY() {
    return this.data.clientY;
  }

  /**
   * Normalized target for both touch and mouse events
   * Returns the element that is behind cursor or touch pointer
   * @property target
   * @type {HTMLElement}
   * @readonly
   */
  get target() {
    return this.data.target;
  }

  /**
   * Container that initiated the sensor
   * @property container
   * @type {HTMLElement}
   * @readonly
   */
  get container() {
    return this.data.container;
  }

  /**
   * Trackpad pressure
   * @property pressure
   * @type {Number}
   * @readonly
   */
  get pressure() {
    return this.data.pressure;
  }
}

exports.SensorEvent = SensorEvent; /**
                                    * Drag start sensor event
                                    * @class DragStartSensorEvent
                                    * @module DragStartSensorEvent
                                    * @extends SensorEvent
                                    */

class DragStartSensorEvent extends SensorEvent {}

exports.DragStartSensorEvent = DragStartSensorEvent; /**
                                                      * Drag move sensor event
                                                      * @class DragMoveSensorEvent
                                                      * @module DragMoveSensorEvent
                                                      * @extends SensorEvent
                                                      */

DragStartSensorEvent.type = 'drag:start';
class DragMoveSensorEvent extends SensorEvent {}

exports.DragMoveSensorEvent = DragMoveSensorEvent; /**
                                                    * Drag stop sensor event
                                                    * @class DragStopSensorEvent
                                                    * @module DragStopSensorEvent
                                                    * @extends SensorEvent
                                                    */

DragMoveSensorEvent.type = 'drag:move';
class DragStopSensorEvent extends SensorEvent {}

exports.DragStopSensorEvent = DragStopSensorEvent; /**
                                                    * Drag pressure sensor event
                                                    * @class DragPressureSensorEvent
                                                    * @module DragPressureSensorEvent
                                                    * @extends SensorEvent
                                                    */

DragStopSensorEvent.type = 'drag:stop';
class DragPressureSensorEvent extends SensorEvent {}
exports.DragPressureSensorEvent = DragPressureSensorEvent;
DragPressureSensorEvent.type = 'drag:pressure';

/***/ }),
/* 45 */
/***/ (function(module, exports, __nested_webpack_require_123170__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _utils = __nested_webpack_require_123170__(2);

var _Sensor = __nested_webpack_require_123170__(4);

var _Sensor2 = _interopRequireDefault(_Sensor);

var _SensorEvent = __nested_webpack_require_123170__(3);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onContextMenuWhileDragging = Symbol('onContextMenuWhileDragging');
const onMouseDown = Symbol('onMouseDown');
const onMouseMove = Symbol('onMouseMove');
const onMouseUp = Symbol('onMouseUp');

/**
 * This sensor picks up native browser mouse events and dictates drag operations
 * @class MouseSensor
 * @module MouseSensor
 * @extends Sensor
 */
class MouseSensor extends _Sensor2.default {
  /**
   * MouseSensor constructor.
   * @constructs MouseSensor
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Containers
   * @param {Object} options - Options
   */
  constructor(containers = [], options = {}) {
    super(containers, options);

    /**
     * Indicates if mouse button is still down
     * @property mouseDown
     * @type {Boolean}
     */
    this.mouseDown = false;

    /**
     * Mouse down timer which will end up triggering the drag start operation
     * @property mouseDownTimeout
     * @type {Number}
     */
    this.mouseDownTimeout = null;

    /**
     * Indicates if context menu has been opened during drag operation
     * @property openedContextMenu
     * @type {Boolean}
     */
    this.openedContextMenu = false;

    this[onContextMenuWhileDragging] = this[onContextMenuWhileDragging].bind(this);
    this[onMouseDown] = this[onMouseDown].bind(this);
    this[onMouseMove] = this[onMouseMove].bind(this);
    this[onMouseUp] = this[onMouseUp].bind(this);
  }

  /**
   * Attaches sensors event listeners to the DOM
   */
  attach() {
    document.addEventListener('mousedown', this[onMouseDown], true);
  }

  /**
   * Detaches sensors event listeners to the DOM
   */
  detach() {
    document.removeEventListener('mousedown', this[onMouseDown], true);
  }

  /**
   * Mouse down handler
   * @private
   * @param {Event} event - Mouse down event
   */
  [onMouseDown](event) {
    if (event.button !== 0 || event.ctrlKey || event.metaKey) {
      return;
    }

    document.addEventListener('mouseup', this[onMouseUp]);

    const target = document.elementFromPoint(event.clientX, event.clientY);
    const container = (0, _utils.closest)(target, this.containers);

    if (!container) {
      return;
    }

    document.addEventListener('dragstart', preventNativeDragStart);

    this.mouseDown = true;

    clearTimeout(this.mouseDownTimeout);
    this.mouseDownTimeout = setTimeout(() => {
      if (!this.mouseDown) {
        return;
      }

      const dragStartEvent = new _SensorEvent.DragStartSensorEvent({
        clientX: event.clientX,
        clientY: event.clientY,
        target,
        container,
        originalEvent: event
      });

      this.trigger(container, dragStartEvent);

      this.currentContainer = container;
      this.dragging = !dragStartEvent.canceled();

      if (this.dragging) {
        document.addEventListener('contextmenu', this[onContextMenuWhileDragging]);
        document.addEventListener('mousemove', this[onMouseMove]);
      }
    }, this.options.delay);
  }

  /**
   * Mouse move handler
   * @private
   * @param {Event} event - Mouse move event
   */
  [onMouseMove](event) {
    if (!this.dragging) {
      return;
    }

    const target = document.elementFromPoint(event.clientX, event.clientY);

    const dragMoveEvent = new _SensorEvent.DragMoveSensorEvent({
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container: this.currentContainer,
      originalEvent: event
    });

    this.trigger(this.currentContainer, dragMoveEvent);
  }

  /**
   * Mouse up handler
   * @private
   * @param {Event} event - Mouse up event
   */
  [onMouseUp](event) {
    this.mouseDown = Boolean(this.openedContextMenu);

    if (this.openedContextMenu) {
      this.openedContextMenu = false;
      return;
    }

    document.removeEventListener('mouseup', this[onMouseUp]);
    document.removeEventListener('dragstart', preventNativeDragStart);

    if (!this.dragging) {
      return;
    }

    const target = document.elementFromPoint(event.clientX, event.clientY);

    const dragStopEvent = new _SensorEvent.DragStopSensorEvent({
      clientX: event.clientX,
      clientY: event.clientY,
      target,
      container: this.currentContainer,
      originalEvent: event
    });

    this.trigger(this.currentContainer, dragStopEvent);

    document.removeEventListener('contextmenu', this[onContextMenuWhileDragging]);
    document.removeEventListener('mousemove', this[onMouseMove]);

    this.currentContainer = null;
    this.dragging = false;
  }

  /**
   * Context menu handler
   * @private
   * @param {Event} event - Context menu event
   */
  [onContextMenuWhileDragging](event) {
    event.preventDefault();
    this.openedContextMenu = true;
  }
}

exports.default = MouseSensor;
function preventNativeDragStart(event) {
  event.preventDefault();
}

/***/ }),
/* 46 */
/***/ (function(module, exports, __nested_webpack_require_128407__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _MouseSensor = __nested_webpack_require_128407__(45);

var _MouseSensor2 = _interopRequireDefault(_MouseSensor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _MouseSensor2.default;

/***/ }),
/* 47 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

/**
 * Base sensor class. Extend from this class to create a new or custom sensor
 * @class Sensor
 * @module Sensor
 */
class Sensor {
  /**
   * Sensor constructor.
   * @constructs Sensor
   * @param {HTMLElement[]|NodeList|HTMLElement} containers - Containers
   * @param {Object} options - Options
   */
  constructor(containers = [], options = {}) {
    /**
     * Current containers
     * @property containers
     * @type {HTMLElement[]}
     */
    this.containers = [...containers];

    /**
     * Current options
     * @property options
     * @type {Object}
     */
    this.options = _extends({}, options);

    /**
     * Current drag state
     * @property dragging
     * @type {Boolean}
     */
    this.dragging = false;

    /**
     * Current container
     * @property currentContainer
     * @type {HTMLElement}
     */
    this.currentContainer = null;
  }

  /**
   * Attaches sensors event listeners to the DOM
   * @return {Sensor}
   */
  attach() {
    return this;
  }

  /**
   * Detaches sensors event listeners to the DOM
   * @return {Sensor}
   */
  detach() {
    return this;
  }

  /**
   * Adds container to this sensor instance
   * @param {...HTMLElement} containers - Containers you want to add to this sensor
   * @example draggable.addContainer(document.body)
   */
  addContainer(...containers) {
    this.containers = [...this.containers, ...containers];
  }

  /**
   * Removes container from this sensor instance
   * @param {...HTMLElement} containers - Containers you want to remove from this sensor
   * @example draggable.removeContainer(document.body)
   */
  removeContainer(...containers) {
    this.containers = this.containers.filter(container => !containers.includes(container));
  }

  /**
   * Triggers event on target element
   * @param {HTMLElement} element - Element to trigger event on
   * @param {SensorEvent} sensorEvent - Sensor event to trigger
   */
  trigger(element, sensorEvent) {
    const event = document.createEvent('Event');
    event.detail = sensorEvent;
    event.initEvent(sensorEvent.type, true, true);
    element.dispatchEvent(event);
    this.lastEvent = sensorEvent;

    return sensorEvent;
  }
}
exports.default = Sensor;

/***/ }),
/* 48 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = requestNextAnimationFrame;
function requestNextAnimationFrame(callback) {
  return requestAnimationFrame(() => {
    requestAnimationFrame(callback);
  });
}

/***/ }),
/* 49 */
/***/ (function(module, exports, __nested_webpack_require_131774__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _requestNextAnimationFrame = __nested_webpack_require_131774__(48);

var _requestNextAnimationFrame2 = _interopRequireDefault(_requestNextAnimationFrame);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _requestNextAnimationFrame2.default;

/***/ }),
/* 50 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = closest;
const matchFunction = Element.prototype.matches || Element.prototype.webkitMatchesSelector || Element.prototype.mozMatchesSelector || Element.prototype.msMatchesSelector;

/**
 * Get the closest parent element of a given element that matches the given
 * selector string or matching function
 *
 * @param {Element} element The child element to find a parent of
 * @param {String|Function} selector The string or function to use to match
 *     the parent element
 * @return {Element|null}
 */
function closest(element, value) {
  if (!element) {
    return null;
  }

  const selector = value;
  const callback = value;
  const nodeList = value;
  const singleElement = value;

  const isSelector = Boolean(typeof value === 'string');
  const isFunction = Boolean(typeof value === 'function');
  const isNodeList = Boolean(value instanceof NodeList || value instanceof Array);
  const isElement = Boolean(value instanceof HTMLElement);

  function conditionFn(currentElement) {
    if (!currentElement) {
      return currentElement;
    } else if (isSelector) {
      return matchFunction.call(currentElement, selector);
    } else if (isNodeList) {
      return [...nodeList].includes(currentElement);
    } else if (isElement) {
      return singleElement === currentElement;
    } else if (isFunction) {
      return callback(currentElement);
    } else {
      return null;
    }
  }

  let current = element;

  do {
    current = current.correspondingUseElement || current.correspondingElement || current;

    if (conditionFn(current)) {
      return current;
    }

    current = current.parentNode;
  } while (current && current !== document.body && current !== document);

  return null;
}

/***/ }),
/* 51 */
/***/ (function(module, exports, __nested_webpack_require_134117__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _closest = __nested_webpack_require_134117__(50);

var _closest2 = _interopRequireDefault(_closest);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _closest2.default;

/***/ }),
/* 52 */
/***/ (function(module, exports, __nested_webpack_require_134502__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = exports.scroll = exports.onDragStop = exports.onDragMove = exports.onDragStart = undefined;

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _AbstractPlugin = __nested_webpack_require_134502__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

var _utils = __nested_webpack_require_134502__(2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onDragStart = exports.onDragStart = Symbol('onDragStart');
const onDragMove = exports.onDragMove = Symbol('onDragMove');
const onDragStop = exports.onDragStop = Symbol('onDragStop');
const scroll = exports.scroll = Symbol('scroll');

/**
 * Scrollable default options
 * @property {Object} defaultOptions
 * @property {Number} defaultOptions.speed
 * @property {Number} defaultOptions.sensitivity
 * @property {HTMLElement[]} defaultOptions.scrollableElements
 * @type {Object}
 */
const defaultOptions = exports.defaultOptions = {
  speed: 6,
  sensitivity: 50,
  scrollableElements: []
};

/**
 * Scrollable plugin which scrolls the closest scrollable parent
 * @class Scrollable
 * @module Scrollable
 * @extends AbstractPlugin
 */
class Scrollable extends _AbstractPlugin2.default {
  /**
   * Scrollable constructor.
   * @constructs Scrollable
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    super(draggable);

    /**
     * Scrollable options
     * @property {Object} options
     * @property {Number} options.speed
     * @property {Number} options.sensitivity
     * @property {HTMLElement[]} options.scrollableElements
     * @type {Object}
     */
    this.options = _extends({}, defaultOptions, this.getOptions());

    /**
     * Keeps current mouse position
     * @property {Object} currentMousePosition
     * @property {Number} currentMousePosition.clientX
     * @property {Number} currentMousePosition.clientY
     * @type {Object|null}
     */
    this.currentMousePosition = null;

    /**
     * Scroll animation frame
     * @property scrollAnimationFrame
     * @type {Number|null}
     */
    this.scrollAnimationFrame = null;

    /**
     * Closest scrollable element
     * @property scrollableElement
     * @type {HTMLElement|null}
     */
    this.scrollableElement = null;

    /**
     * Animation frame looking for the closest scrollable element
     * @property findScrollableElementFrame
     * @type {Number|null}
     */
    this.findScrollableElementFrame = null;

    this[onDragStart] = this[onDragStart].bind(this);
    this[onDragMove] = this[onDragMove].bind(this);
    this[onDragStop] = this[onDragStop].bind(this);
    this[scroll] = this[scroll].bind(this);
  }

  /**
   * Attaches plugins event listeners
   */
  attach() {
    this.draggable.on('drag:start', this[onDragStart]).on('drag:move', this[onDragMove]).on('drag:stop', this[onDragStop]);
  }

  /**
   * Detaches plugins event listeners
   */
  detach() {
    this.draggable.off('drag:start', this[onDragStart]).off('drag:move', this[onDragMove]).off('drag:stop', this[onDragStop]);
  }

  /**
   * Returns options passed through draggable
   * @return {Object}
   */
  getOptions() {
    return this.draggable.options.scrollable || {};
  }

  /**
   * Returns closest scrollable elements by element
   * @param {HTMLElement} target
   * @return {HTMLElement}
   */
  getScrollableElement(target) {
    if (this.hasDefinedScrollableElements()) {
      return (0, _utils.closest)(target, this.options.scrollableElements) || document.documentElement;
    } else {
      return closestScrollableElement(target);
    }
  }

  /**
   * Returns true if at least one scrollable element have been defined via options
   * @param {HTMLElement} target
   * @return {Boolean}
   */
  hasDefinedScrollableElements() {
    return Boolean(this.options.scrollableElements.length !== 0);
  }

  /**
   * Drag start handler. Finds closest scrollable parent in separate frame
   * @param {DragStartEvent} dragEvent
   * @private
   */
  [onDragStart](dragEvent) {
    this.findScrollableElementFrame = requestAnimationFrame(() => {
      this.scrollableElement = this.getScrollableElement(dragEvent.source);
    });
  }

  /**
   * Drag move handler. Remembers mouse position and initiates scrolling
   * @param {DragMoveEvent} dragEvent
   * @private
   */
  [onDragMove](dragEvent) {
    this.findScrollableElementFrame = requestAnimationFrame(() => {
      this.scrollableElement = this.getScrollableElement(dragEvent.sensorEvent.target);
    });

    if (!this.scrollableElement) {
      return;
    }

    const sensorEvent = dragEvent.sensorEvent;
    const scrollOffset = { x: 0, y: 0 };

    if ('ontouchstart' in window) {
      scrollOffset.y = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop || 0;
      scrollOffset.x = window.pageXOffset || document.documentElement.scrollLeft || document.body.scrollLeft || 0;
    }

    this.currentMousePosition = {
      clientX: sensorEvent.clientX - scrollOffset.x,
      clientY: sensorEvent.clientY - scrollOffset.y
    };

    this.scrollAnimationFrame = requestAnimationFrame(this[scroll]);
  }

  /**
   * Drag stop handler. Cancels scroll animations and resets state
   * @private
   */
  [onDragStop]() {
    cancelAnimationFrame(this.scrollAnimationFrame);
    cancelAnimationFrame(this.findScrollableElementFrame);

    this.scrollableElement = null;
    this.scrollAnimationFrame = null;
    this.findScrollableElementFrame = null;
    this.currentMousePosition = null;
  }

  /**
   * Scroll function that does the heavylifting
   * @private
   */
  [scroll]() {
    if (!this.scrollableElement || !this.currentMousePosition) {
      return;
    }

    cancelAnimationFrame(this.scrollAnimationFrame);

    const { speed, sensitivity } = this.options;

    const rect = this.scrollableElement.getBoundingClientRect();
    const bottomCutOff = rect.bottom > window.innerHeight;
    const topCutOff = rect.top < 0;
    const cutOff = topCutOff || bottomCutOff;

    const documentScrollingElement = getDocumentScrollingElement();
    const scrollableElement = this.scrollableElement;
    const clientX = this.currentMousePosition.clientX;
    const clientY = this.currentMousePosition.clientY;

    if (scrollableElement !== document.body && scrollableElement !== document.documentElement && !cutOff) {
      const { offsetHeight, offsetWidth } = scrollableElement;

      if (rect.top + offsetHeight - clientY < sensitivity) {
        scrollableElement.scrollTop += speed;
      } else if (clientY - rect.top < sensitivity) {
        scrollableElement.scrollTop -= speed;
      }

      if (rect.left + offsetWidth - clientX < sensitivity) {
        scrollableElement.scrollLeft += speed;
      } else if (clientX - rect.left < sensitivity) {
        scrollableElement.scrollLeft -= speed;
      }
    } else {
      const { innerHeight, innerWidth } = window;

      if (clientY < sensitivity) {
        documentScrollingElement.scrollTop -= speed;
      } else if (innerHeight - clientY < sensitivity) {
        documentScrollingElement.scrollTop += speed;
      }

      if (clientX < sensitivity) {
        documentScrollingElement.scrollLeft -= speed;
      } else if (innerWidth - clientX < sensitivity) {
        documentScrollingElement.scrollLeft += speed;
      }
    }

    this.scrollAnimationFrame = requestAnimationFrame(this[scroll]);
  }
}

exports.default = Scrollable; /**
                               * Returns true if the passed element has overflow
                               * @param {HTMLElement} element
                               * @return {Boolean}
                               * @private
                               */

function hasOverflow(element) {
  const overflowRegex = /(auto|scroll)/;
  const computedStyles = getComputedStyle(element, null);

  const overflow = computedStyles.getPropertyValue('overflow') + computedStyles.getPropertyValue('overflow-y') + computedStyles.getPropertyValue('overflow-x');

  return overflowRegex.test(overflow);
}

/**
 * Returns true if the passed element is statically positioned
 * @param {HTMLElement} element
 * @return {Boolean}
 * @private
 */
function isStaticallyPositioned(element) {
  const position = getComputedStyle(element).getPropertyValue('position');
  return position === 'static';
}

/**
 * Finds closest scrollable element
 * @param {HTMLElement} element
 * @return {HTMLElement}
 * @private
 */
function closestScrollableElement(element) {
  if (!element) {
    return getDocumentScrollingElement();
  }

  const position = getComputedStyle(element).getPropertyValue('position');
  const excludeStaticParents = position === 'absolute';

  const scrollableElement = (0, _utils.closest)(element, parent => {
    if (excludeStaticParents && isStaticallyPositioned(parent)) {
      return false;
    }
    return hasOverflow(parent);
  });

  if (position === 'fixed' || !scrollableElement) {
    return getDocumentScrollingElement();
  } else {
    return scrollableElement;
  }
}

/**
 * Returns element that scrolls document
 * @return {HTMLElement}
 * @private
 */
function getDocumentScrollingElement() {
  return document.scrollingElement || document.documentElement;
}

/***/ }),
/* 53 */
/***/ (function(module, exports, __nested_webpack_require_144102__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _Scrollable = __nested_webpack_require_144102__(52);

var _Scrollable2 = _interopRequireDefault(_Scrollable);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Scrollable2.default;
exports.defaultOptions = _Scrollable.defaultOptions;

/***/ }),
/* 54 */
/***/ (function(module, exports, __nested_webpack_require_144588__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.MirrorDestroyEvent = exports.MirrorMoveEvent = exports.MirrorAttachedEvent = exports.MirrorCreatedEvent = exports.MirrorCreateEvent = exports.MirrorEvent = undefined;

var _AbstractEvent = __nested_webpack_require_144588__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base mirror event
 * @class MirrorEvent
 * @module MirrorEvent
 * @extends AbstractEvent
 */
class MirrorEvent extends _AbstractEvent2.default {
  /**
   * Draggables source element
   * @property source
   * @type {HTMLElement}
   * @readonly
   */
  get source() {
    return this.data.source;
  }

  /**
   * Draggables original source element
   * @property originalSource
   * @type {HTMLElement}
   * @readonly
   */
  get originalSource() {
    return this.data.originalSource;
  }

  /**
   * Draggables source container element
   * @property sourceContainer
   * @type {HTMLElement}
   * @readonly
   */
  get sourceContainer() {
    return this.data.sourceContainer;
  }

  /**
   * Sensor event
   * @property sensorEvent
   * @type {SensorEvent}
   * @readonly
   */
  get sensorEvent() {
    return this.data.sensorEvent;
  }

  /**
   * Drag event
   * @property dragEvent
   * @type {DragEvent}
   * @readonly
   */
  get dragEvent() {
    return this.data.dragEvent;
  }

  /**
   * Original event that triggered sensor event
   * @property originalEvent
   * @type {Event}
   * @readonly
   */
  get originalEvent() {
    if (this.sensorEvent) {
      return this.sensorEvent.originalEvent;
    }

    return null;
  }
}

exports.MirrorEvent = MirrorEvent; /**
                                    * Mirror create event
                                    * @class MirrorCreateEvent
                                    * @module MirrorCreateEvent
                                    * @extends MirrorEvent
                                    */

class MirrorCreateEvent extends MirrorEvent {}

exports.MirrorCreateEvent = MirrorCreateEvent; /**
                                                * Mirror created event
                                                * @class MirrorCreatedEvent
                                                * @module MirrorCreatedEvent
                                                * @extends MirrorEvent
                                                */

MirrorCreateEvent.type = 'mirror:create';
class MirrorCreatedEvent extends MirrorEvent {

  /**
   * Draggables mirror element
   * @property mirror
   * @type {HTMLElement}
   * @readonly
   */
  get mirror() {
    return this.data.mirror;
  }
}

exports.MirrorCreatedEvent = MirrorCreatedEvent; /**
                                                  * Mirror attached event
                                                  * @class MirrorAttachedEvent
                                                  * @module MirrorAttachedEvent
                                                  * @extends MirrorEvent
                                                  */

MirrorCreatedEvent.type = 'mirror:created';
class MirrorAttachedEvent extends MirrorEvent {

  /**
   * Draggables mirror element
   * @property mirror
   * @type {HTMLElement}
   * @readonly
   */
  get mirror() {
    return this.data.mirror;
  }
}

exports.MirrorAttachedEvent = MirrorAttachedEvent; /**
                                                    * Mirror move event
                                                    * @class MirrorMoveEvent
                                                    * @module MirrorMoveEvent
                                                    * @extends MirrorEvent
                                                    */

MirrorAttachedEvent.type = 'mirror:attached';
class MirrorMoveEvent extends MirrorEvent {

  /**
   * Draggables mirror element
   * @property mirror
   * @type {HTMLElement}
   * @readonly
   */
  get mirror() {
    return this.data.mirror;
  }
}

exports.MirrorMoveEvent = MirrorMoveEvent; /**
                                            * Mirror destroy event
                                            * @class MirrorDestroyEvent
                                            * @module MirrorDestroyEvent
                                            * @extends MirrorEvent
                                            */

MirrorMoveEvent.type = 'mirror:move';
MirrorMoveEvent.cancelable = true;
class MirrorDestroyEvent extends MirrorEvent {

  /**
   * Draggables mirror element
   * @property mirror
   * @type {HTMLElement}
   * @readonly
   */
  get mirror() {
    return this.data.mirror;
  }
}
exports.MirrorDestroyEvent = MirrorDestroyEvent;
MirrorDestroyEvent.type = 'mirror:destroy';
MirrorDestroyEvent.cancelable = true;

/***/ }),
/* 55 */
/***/ (function(module, exports, __nested_webpack_require_149501__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _MirrorEvent = __nested_webpack_require_149501__(54);

Object.keys(_MirrorEvent).forEach(function (key) {
  if (key === "default" || key === "__esModule") return;
  Object.defineProperty(exports, key, {
    enumerable: true,
    get: function () {
      return _MirrorEvent[key];
    }
  });
});

/***/ }),
/* 56 */
/***/ (function(module, exports, __nested_webpack_require_149946__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = exports.getAppendableContainer = exports.onScroll = exports.onMirrorMove = exports.onMirrorCreated = exports.onDragStop = exports.onDragMove = exports.onDragStart = undefined;

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _AbstractPlugin = __nested_webpack_require_149946__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

var _MirrorEvent = __nested_webpack_require_149946__(55);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _objectWithoutProperties(obj, keys) { var target = {}; for (var i in obj) { if (keys.indexOf(i) >= 0) continue; if (!Object.prototype.hasOwnProperty.call(obj, i)) continue; target[i] = obj[i]; } return target; }

const onDragStart = exports.onDragStart = Symbol('onDragStart');
const onDragMove = exports.onDragMove = Symbol('onDragMove');
const onDragStop = exports.onDragStop = Symbol('onDragStop');
const onMirrorCreated = exports.onMirrorCreated = Symbol('onMirrorCreated');
const onMirrorMove = exports.onMirrorMove = Symbol('onMirrorMove');
const onScroll = exports.onScroll = Symbol('onScroll');
const getAppendableContainer = exports.getAppendableContainer = Symbol('getAppendableContainer');

/**
 * Mirror default options
 * @property {Object} defaultOptions
 * @property {Boolean} defaultOptions.constrainDimensions
 * @property {Boolean} defaultOptions.xAxis
 * @property {Boolean} defaultOptions.yAxis
 * @property {null} defaultOptions.cursorOffsetX
 * @property {null} defaultOptions.cursorOffsetY
 * @type {Object}
 */
const defaultOptions = exports.defaultOptions = {
  constrainDimensions: false,
  xAxis: true,
  yAxis: true,
  cursorOffsetX: null,
  cursorOffsetY: null
};

/**
 * Mirror plugin which controls the mirror positioning while dragging
 * @class Mirror
 * @module Mirror
 * @extends AbstractPlugin
 */
class Mirror extends _AbstractPlugin2.default {
  /**
   * Mirror constructor.
   * @constructs Mirror
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    super(draggable);

    /**
     * Mirror options
     * @property {Object} options
     * @property {Boolean} options.constrainDimensions
     * @property {Boolean} options.xAxis
     * @property {Boolean} options.yAxis
     * @property {Number|null} options.cursorOffsetX
     * @property {Number|null} options.cursorOffsetY
     * @property {String|HTMLElement|Function} options.appendTo
     * @type {Object}
     */
    this.options = _extends({}, defaultOptions, this.getOptions());

    /**
     * Scroll offset for touch devices because the mirror is positioned fixed
     * @property {Object} scrollOffset
     * @property {Number} scrollOffset.x
     * @property {Number} scrollOffset.y
     */
    this.scrollOffset = { x: 0, y: 0 };

    /**
     * Initial scroll offset for touch devices because the mirror is positioned fixed
     * @property {Object} scrollOffset
     * @property {Number} scrollOffset.x
     * @property {Number} scrollOffset.y
     */
    this.initialScrollOffset = {
      x: window.scrollX,
      y: window.scrollY
    };

    this[onDragStart] = this[onDragStart].bind(this);
    this[onDragMove] = this[onDragMove].bind(this);
    this[onDragStop] = this[onDragStop].bind(this);
    this[onMirrorCreated] = this[onMirrorCreated].bind(this);
    this[onMirrorMove] = this[onMirrorMove].bind(this);
    this[onScroll] = this[onScroll].bind(this);
  }

  /**
   * Attaches plugins event listeners
   */
  attach() {
    this.draggable.on('drag:start', this[onDragStart]).on('drag:move', this[onDragMove]).on('drag:stop', this[onDragStop]).on('mirror:created', this[onMirrorCreated]).on('mirror:move', this[onMirrorMove]);
  }

  /**
   * Detaches plugins event listeners
   */
  detach() {
    this.draggable.off('drag:start', this[onDragStart]).off('drag:move', this[onDragMove]).off('drag:stop', this[onDragStop]).off('mirror:created', this[onMirrorCreated]).off('mirror:move', this[onMirrorMove]);
  }

  /**
   * Returns options passed through draggable
   * @return {Object}
   */
  getOptions() {
    return this.draggable.options.mirror || {};
  }

  [onDragStart](dragEvent) {
    if (dragEvent.canceled()) {
      return;
    }

    if ('ontouchstart' in window) {
      document.addEventListener('scroll', this[onScroll], true);
    }

    this.initialScrollOffset = {
      x: window.scrollX,
      y: window.scrollY
    };

    const { source, originalSource, sourceContainer, sensorEvent } = dragEvent;

    const mirrorCreateEvent = new _MirrorEvent.MirrorCreateEvent({
      source,
      originalSource,
      sourceContainer,
      sensorEvent,
      dragEvent
    });

    this.draggable.trigger(mirrorCreateEvent);

    if (isNativeDragEvent(sensorEvent) || mirrorCreateEvent.canceled()) {
      return;
    }

    const appendableContainer = this[getAppendableContainer](source) || sourceContainer;
    this.mirror = source.cloneNode(true);

    const mirrorCreatedEvent = new _MirrorEvent.MirrorCreatedEvent({
      source,
      originalSource,
      sourceContainer,
      sensorEvent,
      dragEvent,
      mirror: this.mirror
    });

    const mirrorAttachedEvent = new _MirrorEvent.MirrorAttachedEvent({
      source,
      originalSource,
      sourceContainer,
      sensorEvent,
      dragEvent,
      mirror: this.mirror
    });

    this.draggable.trigger(mirrorCreatedEvent);
    appendableContainer.appendChild(this.mirror);
    this.draggable.trigger(mirrorAttachedEvent);
  }

  [onDragMove](dragEvent) {
    if (!this.mirror || dragEvent.canceled()) {
      return;
    }

    const { source, originalSource, sourceContainer, sensorEvent } = dragEvent;

    const mirrorMoveEvent = new _MirrorEvent.MirrorMoveEvent({
      source,
      originalSource,
      sourceContainer,
      sensorEvent,
      dragEvent,
      mirror: this.mirror
    });

    this.draggable.trigger(mirrorMoveEvent);
  }

  [onDragStop](dragEvent) {
    if ('ontouchstart' in window) {
      document.removeEventListener('scroll', this[onScroll], true);
    }

    this.initialScrollOffset = { x: 0, y: 0 };
    this.scrollOffset = { x: 0, y: 0 };

    if (!this.mirror) {
      return;
    }

    const { source, sourceContainer, sensorEvent } = dragEvent;

    const mirrorDestroyEvent = new _MirrorEvent.MirrorDestroyEvent({
      source,
      mirror: this.mirror,
      sourceContainer,
      sensorEvent,
      dragEvent
    });

    this.draggable.trigger(mirrorDestroyEvent);

    if (!mirrorDestroyEvent.canceled()) {
      this.mirror.parentNode.removeChild(this.mirror);
    }
  }

  [onScroll]() {
    this.scrollOffset = {
      x: window.scrollX - this.initialScrollOffset.x,
      y: window.scrollY - this.initialScrollOffset.y
    };
  }

  /**
   * Mirror created handler
   * @param {MirrorCreatedEvent} mirrorEvent
   * @return {Promise}
   * @private
   */
  [onMirrorCreated]({ mirror, source, sensorEvent }) {
    const mirrorClass = this.draggable.getClassNameFor('mirror');

    const setState = (_ref) => {
      let { mirrorOffset, initialX, initialY } = _ref,
          args = _objectWithoutProperties(_ref, ['mirrorOffset', 'initialX', 'initialY']);

      this.mirrorOffset = mirrorOffset;
      this.initialX = initialX;
      this.initialY = initialY;
      return _extends({ mirrorOffset, initialX, initialY }, args);
    };

    const initialState = {
      mirror,
      source,
      sensorEvent,
      mirrorClass,
      scrollOffset: this.scrollOffset,
      options: this.options
    };

    return Promise.resolve(initialState)
    // Fix reflow here
    .then(computeMirrorDimensions).then(calculateMirrorOffset).then(resetMirror).then(addMirrorClasses).then(positionMirror({ initial: true })).then(removeMirrorID).then(setState);
  }

  /**
   * Mirror move handler
   * @param {MirrorMoveEvent} mirrorEvent
   * @return {Promise|null}
   * @private
   */
  [onMirrorMove](mirrorEvent) {
    if (mirrorEvent.canceled()) {
      return null;
    }

    const initialState = {
      mirror: mirrorEvent.mirror,
      sensorEvent: mirrorEvent.sensorEvent,
      mirrorOffset: this.mirrorOffset,
      options: this.options,
      initialX: this.initialX,
      initialY: this.initialY,
      scrollOffset: this.scrollOffset
    };

    return Promise.resolve(initialState).then(positionMirror({ raf: true }));
  }

  /**
   * Returns appendable container for mirror based on the appendTo option
   * @private
   * @param {Object} options
   * @param {HTMLElement} options.source - Current source
   * @return {HTMLElement}
   */
  [getAppendableContainer](source) {
    const appendTo = this.options.appendTo;

    if (typeof appendTo === 'string') {
      return document.querySelector(appendTo);
    } else if (appendTo instanceof HTMLElement) {
      return appendTo;
    } else if (typeof appendTo === 'function') {
      return appendTo(source);
    } else {
      return source.parentNode;
    }
  }
}

exports.default = Mirror; /**
                           * Computes mirror dimensions based on the source element
                           * Adds sourceRect to state
                           * @param {Object} state
                           * @param {HTMLElement} state.source
                           * @return {Promise}
                           * @private
                           */

function computeMirrorDimensions(_ref2) {
  let { source } = _ref2,
      args = _objectWithoutProperties(_ref2, ['source']);

  return withPromise(resolve => {
    const sourceRect = source.getBoundingClientRect();
    resolve(_extends({ source, sourceRect }, args));
  });
}

/**
 * Calculates mirror offset
 * Adds mirrorOffset to state
 * @param {Object} state
 * @param {SensorEvent} state.sensorEvent
 * @param {DOMRect} state.sourceRect
 * @return {Promise}
 * @private
 */
function calculateMirrorOffset(_ref3) {
  let { sensorEvent, sourceRect, options } = _ref3,
      args = _objectWithoutProperties(_ref3, ['sensorEvent', 'sourceRect', 'options']);

  return withPromise(resolve => {
    const top = options.cursorOffsetY === null ? sensorEvent.clientY - sourceRect.top : options.cursorOffsetY;
    const left = options.cursorOffsetX === null ? sensorEvent.clientX - sourceRect.left : options.cursorOffsetX;

    const mirrorOffset = { top, left };

    resolve(_extends({ sensorEvent, sourceRect, mirrorOffset, options }, args));
  });
}

/**
 * Applys mirror styles
 * @param {Object} state
 * @param {HTMLElement} state.mirror
 * @param {HTMLElement} state.source
 * @param {Object} state.options
 * @return {Promise}
 * @private
 */
function resetMirror(_ref4) {
  let { mirror, source, options } = _ref4,
      args = _objectWithoutProperties(_ref4, ['mirror', 'source', 'options']);

  return withPromise(resolve => {
    let offsetHeight;
    let offsetWidth;

    if (options.constrainDimensions) {
      const computedSourceStyles = getComputedStyle(source);
      offsetHeight = computedSourceStyles.getPropertyValue('height');
      offsetWidth = computedSourceStyles.getPropertyValue('width');
    }

    mirror.style.position = 'fixed';
    mirror.style.pointerEvents = 'none';
    mirror.style.top = 0;
    mirror.style.left = 0;
    mirror.style.margin = 0;

    if (options.constrainDimensions) {
      mirror.style.height = offsetHeight;
      mirror.style.width = offsetWidth;
    }

    resolve(_extends({ mirror, source, options }, args));
  });
}

/**
 * Applys mirror class on mirror element
 * @param {Object} state
 * @param {HTMLElement} state.mirror
 * @param {String} state.mirrorClass
 * @return {Promise}
 * @private
 */
function addMirrorClasses(_ref5) {
  let { mirror, mirrorClass } = _ref5,
      args = _objectWithoutProperties(_ref5, ['mirror', 'mirrorClass']);

  return withPromise(resolve => {
    mirror.classList.add(mirrorClass);
    resolve(_extends({ mirror, mirrorClass }, args));
  });
}

/**
 * Removes source ID from cloned mirror element
 * @param {Object} state
 * @param {HTMLElement} state.mirror
 * @return {Promise}
 * @private
 */
function removeMirrorID(_ref6) {
  let { mirror } = _ref6,
      args = _objectWithoutProperties(_ref6, ['mirror']);

  return withPromise(resolve => {
    mirror.removeAttribute('id');
    delete mirror.id;
    resolve(_extends({ mirror }, args));
  });
}

/**
 * Positions mirror with translate3d
 * @param {Object} state
 * @param {HTMLElement} state.mirror
 * @param {SensorEvent} state.sensorEvent
 * @param {Object} state.mirrorOffset
 * @param {Number} state.initialY
 * @param {Number} state.initialX
 * @param {Object} state.options
 * @return {Promise}
 * @private
 */
function positionMirror({ withFrame = false, initial = false } = {}) {
  return (_ref7) => {
    let { mirror, sensorEvent, mirrorOffset, initialY, initialX, scrollOffset, options } = _ref7,
        args = _objectWithoutProperties(_ref7, ['mirror', 'sensorEvent', 'mirrorOffset', 'initialY', 'initialX', 'scrollOffset', 'options']);

    return withPromise(resolve => {
      const result = _extends({
        mirror,
        sensorEvent,
        mirrorOffset,
        options
      }, args);

      if (mirrorOffset) {
        const x = sensorEvent.clientX - mirrorOffset.left - scrollOffset.x;
        const y = sensorEvent.clientY - mirrorOffset.top - scrollOffset.y;

        if (options.xAxis && options.yAxis || initial) {
          mirror.style.transform = `translate3d(${x}px, ${y}px, 0)`;
        } else if (options.xAxis && !options.yAxis) {
          mirror.style.transform = `translate3d(${x}px, ${initialY}px, 0)`;
        } else if (options.yAxis && !options.xAxis) {
          mirror.style.transform = `translate3d(${initialX}px, ${y}px, 0)`;
        }

        if (initial) {
          result.initialX = x;
          result.initialY = y;
        }
      }

      resolve(result);
    }, { frame: withFrame });
  };
}

/**
 * Wraps functions in promise with potential animation frame option
 * @param {Function} callback
 * @param {Object} options
 * @param {Boolean} options.raf
 * @return {Promise}
 * @private
 */
function withPromise(callback, { raf = false } = {}) {
  return new Promise((resolve, reject) => {
    if (raf) {
      requestAnimationFrame(() => {
        callback(resolve, reject);
      });
    } else {
      callback(resolve, reject);
    }
  });
}

/**
 * Returns true if the sensor event was triggered by a native browser drag event
 * @param {SensorEvent} sensorEvent
 */
function isNativeDragEvent(sensorEvent) {
  return (/^drag/.test(sensorEvent.originalEvent.type)
  );
}

/***/ }),
/* 57 */
/***/ (function(module, exports, __nested_webpack_require_164842__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _Mirror = __nested_webpack_require_164842__(56);

var _Mirror2 = _interopRequireDefault(_Mirror);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Mirror2.default;
exports.defaultOptions = _Mirror.defaultOptions;

/***/ }),
/* 58 */
/***/ (function(module, exports, __nested_webpack_require_165308__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _AbstractPlugin = __nested_webpack_require_165308__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onInitialize = Symbol('onInitialize');
const onDestroy = Symbol('onDestroy');

/**
 * Focusable default options
 * @property {Object} defaultOptions
 * @type {Object}
 */
const defaultOptions = {};

/**
 * Focusable plugin
 * @class Focusable
 * @module Focusable
 * @extends AbstractPlugin
 */
class Focusable extends _AbstractPlugin2.default {
  /**
   * Focusable constructor.
   * @constructs Focusable
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    super(draggable);

    /**
     * Focusable options
     * @property {Object} options
     * @type {Object}
     */
    this.options = _extends({}, defaultOptions, this.getOptions());

    this[onInitialize] = this[onInitialize].bind(this);
    this[onDestroy] = this[onDestroy].bind(this);
  }

  /**
   * Attaches listeners to draggable
   */
  attach() {
    this.draggable.on('draggable:initialize', this[onInitialize]).on('draggable:destroy', this[onDestroy]);
  }

  /**
   * Detaches listeners from draggable
   */
  detach() {
    this.draggable.off('draggable:initialize', this[onInitialize]).off('draggable:destroy', this[onDestroy]);
  }

  /**
   * Returns options passed through draggable
   * @return {Object}
   */
  getOptions() {
    return this.draggable.options.focusable || {};
  }

  /**
   * Returns draggable containers and elements
   * @return {HTMLElement[]}
   */
  getElements() {
    return [...this.draggable.containers, ...this.draggable.getDraggableElements()];
  }

  /**
   * Intialize handler
   * @private
   */
  [onInitialize]() {
    // Can wait until the next best frame is available
    requestAnimationFrame(() => {
      this.getElements().forEach(element => decorateElement(element));
    });
  }

  /**
   * Destroy handler
   * @private
   */
  [onDestroy]() {
    // Can wait until the next best frame is available
    requestAnimationFrame(() => {
      this.getElements().forEach(element => stripElement(element));
    });
  }
}

exports.default = Focusable; /**
                              * Keeps track of all the elements that are missing tabindex attributes
                              * so they can be reset when draggable gets destroyed
                              * @const {HTMLElement[]} elementsWithMissingTabIndex
                              */

const elementsWithMissingTabIndex = [];

/**
 * Decorates element with tabindex attributes
 * @param {HTMLElement} element
 * @return {Object}
 * @private
 */
function decorateElement(element) {
  const hasMissingTabIndex = Boolean(!element.getAttribute('tabindex') && element.tabIndex === -1);

  if (hasMissingTabIndex) {
    elementsWithMissingTabIndex.push(element);
    element.tabIndex = 0;
  }
}

/**
 * Removes elements tabindex attributes
 * @param {HTMLElement} element
 * @private
 */
function stripElement(element) {
  const tabIndexElementPosition = elementsWithMissingTabIndex.indexOf(element);

  if (tabIndexElementPosition !== -1) {
    element.tabIndex = -1;
    elementsWithMissingTabIndex.splice(tabIndexElementPosition, 1);
  }
}

/***/ }),
/* 59 */
/***/ (function(module, exports, __nested_webpack_require_169004__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _Focusable = __nested_webpack_require_169004__(58);

var _Focusable2 = _interopRequireDefault(_Focusable);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Focusable2.default;

/***/ }),
/* 60 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
/**
 * All draggable plugins inherit from this class.
 * @abstract
 * @class AbstractPlugin
 * @module AbstractPlugin
 */
class AbstractPlugin {
  /**
   * AbstractPlugin constructor.
   * @constructs AbstractPlugin
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    /**
     * Draggable instance
     * @property draggable
     * @type {Draggable}
     */
    this.draggable = draggable;
  }

  /**
   * Override to add listeners
   * @abstract
   */
  attach() {
    throw new Error('Not Implemented');
  }

  /**
   * Override to remove listeners
   * @abstract
   */
  detach() {
    throw new Error('Not Implemented');
  }
}
exports.default = AbstractPlugin;

/***/ }),
/* 61 */
/***/ (function(module, exports, __nested_webpack_require_170260__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

var _AbstractPlugin = __nested_webpack_require_170260__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

const onInitialize = Symbol('onInitialize');
const onDestroy = Symbol('onDestroy');
const announceEvent = Symbol('announceEvent');
const announceMessage = Symbol('announceMessage');

const ARIA_RELEVANT = 'aria-relevant';
const ARIA_ATOMIC = 'aria-atomic';
const ARIA_LIVE = 'aria-live';
const ROLE = 'role';

/**
 * Announcement default options
 * @property {Object} defaultOptions
 * @property {Number} defaultOptions.expire
 * @type {Object}
 */
const defaultOptions = exports.defaultOptions = {
  expire: 7000
};

/**
 * Announcement plugin
 * @class Announcement
 * @module Announcement
 * @extends AbstractPlugin
 */
class Announcement extends _AbstractPlugin2.default {
  /**
   * Announcement constructor.
   * @constructs Announcement
   * @param {Draggable} draggable - Draggable instance
   */
  constructor(draggable) {
    super(draggable);

    /**
     * Plugin options
     * @property options
     * @type {Object}
     */
    this.options = _extends({}, defaultOptions, this.getOptions());

    /**
     * Original draggable trigger method. Hack until we have onAll or on('all')
     * @property originalTriggerMethod
     * @type {Function}
     */
    this.originalTriggerMethod = this.draggable.trigger;

    this[onInitialize] = this[onInitialize].bind(this);
    this[onDestroy] = this[onDestroy].bind(this);
  }

  /**
   * Attaches listeners to draggable
   */
  attach() {
    this.draggable.on('draggable:initialize', this[onInitialize]);
  }

  /**
   * Detaches listeners from draggable
   */
  detach() {
    this.draggable.off('draggable:destroy', this[onDestroy]);
  }

  /**
   * Returns passed in options
   */
  getOptions() {
    return this.draggable.options.announcements || {};
  }

  /**
   * Announces event
   * @private
   * @param {AbstractEvent} event
   */
  [announceEvent](event) {
    const message = this.options[event.type];

    if (message && typeof message === 'string') {
      this[announceMessage](message);
    }

    if (message && typeof message === 'function') {
      this[announceMessage](message(event));
    }
  }

  /**
   * Announces message to screen reader
   * @private
   * @param {String} message
   */
  [announceMessage](message) {
    announce(message, { expire: this.options.expire });
  }

  /**
   * Initialize hander
   * @private
   */
  [onInitialize]() {
    // Hack until there is an api for listening for all events
    this.draggable.trigger = event => {
      try {
        this[announceEvent](event);
      } finally {
        // Ensure that original trigger is called
        this.originalTriggerMethod.call(this.draggable, event);
      }
    };
  }

  /**
   * Destroy hander
   * @private
   */
  [onDestroy]() {
    this.draggable.trigger = this.originalTriggerMethod;
  }
}

exports.default = Announcement; /**
                                 * @const {HTMLElement} liveRegion
                                 */

const liveRegion = createRegion();

/**
 * Announces message via live region
 * @param {String} message
 * @param {Object} options
 * @param {Number} options.expire
 */
function announce(message, { expire }) {
  const element = document.createElement('div');

  element.textContent = message;
  liveRegion.appendChild(element);

  return setTimeout(() => {
    liveRegion.removeChild(element);
  }, expire);
}

/**
 * Creates region element
 * @return {HTMLElement}
 */
function createRegion() {
  const element = document.createElement('div');

  element.setAttribute('id', 'draggable-live-region');
  element.setAttribute(ARIA_RELEVANT, 'additions');
  element.setAttribute(ARIA_ATOMIC, 'true');
  element.setAttribute(ARIA_LIVE, 'assertive');
  element.setAttribute(ROLE, 'log');

  element.style.position = 'fixed';
  element.style.width = '1px';
  element.style.height = '1px';
  element.style.top = '-1px';
  element.style.overflow = 'hidden';

  return element;
}

// Append live region element as early as possible
document.addEventListener('DOMContentLoaded', () => {
  document.body.appendChild(liveRegion);
});

/***/ }),
/* 62 */
/***/ (function(module, exports, __nested_webpack_require_174953__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.defaultOptions = undefined;

var _Announcement = __nested_webpack_require_174953__(61);

var _Announcement2 = _interopRequireDefault(_Announcement);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _Announcement2.default;
exports.defaultOptions = _Announcement.defaultOptions;

/***/ }),
/* 63 */
/***/ (function(module, exports, __nested_webpack_require_175449__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.DraggableDestroyEvent = exports.DraggableInitializedEvent = exports.DraggableEvent = undefined;

var _AbstractEvent = __nested_webpack_require_175449__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base draggable event
 * @class DraggableEvent
 * @module DraggableEvent
 * @extends AbstractEvent
 */
class DraggableEvent extends _AbstractEvent2.default {

  /**
   * Draggable instance
   * @property draggable
   * @type {Draggable}
   * @readonly
   */
  get draggable() {
    return this.data.draggable;
  }
}

exports.DraggableEvent = DraggableEvent; /**
                                          * Draggable initialized event
                                          * @class DraggableInitializedEvent
                                          * @module DraggableInitializedEvent
                                          * @extends DraggableEvent
                                          */

DraggableEvent.type = 'draggable';
class DraggableInitializedEvent extends DraggableEvent {}

exports.DraggableInitializedEvent = DraggableInitializedEvent; /**
                                                                * Draggable destory event
                                                                * @class DraggableInitializedEvent
                                                                * @module DraggableDestroyEvent
                                                                * @extends DraggableDestroyEvent
                                                                */

DraggableInitializedEvent.type = 'draggable:initialize';
class DraggableDestroyEvent extends DraggableEvent {}
exports.DraggableDestroyEvent = DraggableDestroyEvent;
DraggableDestroyEvent.type = 'draggable:destroy';

/***/ }),
/* 64 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };

const canceled = Symbol('canceled');

/**
 * All events fired by draggable inherit this class. You can call `cancel()` to
 * cancel a specific event or you can check if an event has been canceled by
 * calling `canceled()`.
 * @abstract
 * @class AbstractEvent
 * @module AbstractEvent
 */
class AbstractEvent {

  /**
   * AbstractEvent constructor.
   * @constructs AbstractEvent
   * @param {object} data - Event data
   */

  /**
   * Event type
   * @static
   * @abstract
   * @property type
   * @type {String}
   */
  constructor(data) {
    this[canceled] = false;
    this.data = data;
  }

  /**
   * Read-only type
   * @abstract
   * @return {String}
   */


  /**
   * Event cancelable
   * @static
   * @abstract
   * @property cancelable
   * @type {Boolean}
   */
  get type() {
    return this.constructor.type;
  }

  /**
   * Read-only cancelable
   * @abstract
   * @return {Boolean}
   */
  get cancelable() {
    return this.constructor.cancelable;
  }

  /**
   * Cancels the event instance
   * @abstract
   */
  cancel() {
    this[canceled] = true;
  }

  /**
   * Check if event has been canceled
   * @abstract
   * @return {Boolean}
   */
  canceled() {
    return Boolean(this[canceled]);
  }

  /**
   * Returns new event instance with existing event data.
   * This method allows for overriding of event data.
   * @param {Object} data
   * @return {AbstractEvent}
   */
  clone(data) {
    return new this.constructor(_extends({}, this.data, data));
  }
}
exports.default = AbstractEvent;
AbstractEvent.type = 'event';
AbstractEvent.cancelable = false;

/***/ }),
/* 65 */
/***/ (function(module, exports, __nested_webpack_require_179459__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.DragStopEvent = exports.DragPressureEvent = exports.DragOutContainerEvent = exports.DragOverContainerEvent = exports.DragOutEvent = exports.DragOverEvent = exports.DragMoveEvent = exports.DragStartEvent = exports.DragEvent = undefined;

var _AbstractEvent = __nested_webpack_require_179459__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Base drag event
 * @class DragEvent
 * @module DragEvent
 * @extends AbstractEvent
 */
class DragEvent extends _AbstractEvent2.default {

  /**
   * Draggables source element
   * @property source
   * @type {HTMLElement}
   * @readonly
   */
  get source() {
    return this.data.source;
  }

  /**
   * Draggables original source element
   * @property originalSource
   * @type {HTMLElement}
   * @readonly
   */
  get originalSource() {
    return this.data.originalSource;
  }

  /**
   * Draggables mirror element
   * @property mirror
   * @type {HTMLElement}
   * @readonly
   */
  get mirror() {
    return this.data.mirror;
  }

  /**
   * Draggables source container element
   * @property sourceContainer
   * @type {HTMLElement}
   * @readonly
   */
  get sourceContainer() {
    return this.data.sourceContainer;
  }

  /**
   * Sensor event
   * @property sensorEvent
   * @type {SensorEvent}
   * @readonly
   */
  get sensorEvent() {
    return this.data.sensorEvent;
  }

  /**
   * Original event that triggered sensor event
   * @property originalEvent
   * @type {Event}
   * @readonly
   */
  get originalEvent() {
    if (this.sensorEvent) {
      return this.sensorEvent.originalEvent;
    }

    return null;
  }
}

exports.DragEvent = DragEvent; /**
                                * Drag start event
                                * @class DragStartEvent
                                * @module DragStartEvent
                                * @extends DragEvent
                                */

DragEvent.type = 'drag';
class DragStartEvent extends DragEvent {}

exports.DragStartEvent = DragStartEvent; /**
                                          * Drag move event
                                          * @class DragMoveEvent
                                          * @module DragMoveEvent
                                          * @extends DragEvent
                                          */

DragStartEvent.type = 'drag:start';
DragStartEvent.cancelable = true;
class DragMoveEvent extends DragEvent {}

exports.DragMoveEvent = DragMoveEvent; /**
                                        * Drag over event
                                        * @class DragOverEvent
                                        * @module DragOverEvent
                                        * @extends DragEvent
                                        */

DragMoveEvent.type = 'drag:move';
class DragOverEvent extends DragEvent {

  /**
   * Draggable container you are over
   * @property overContainer
   * @type {HTMLElement}
   * @readonly
   */
  get overContainer() {
    return this.data.overContainer;
  }

  /**
   * Draggable element you are over
   * @property over
   * @type {HTMLElement}
   * @readonly
   */
  get over() {
    return this.data.over;
  }
}

exports.DragOverEvent = DragOverEvent; /**
                                        * Drag out event
                                        * @class DragOutEvent
                                        * @module DragOutEvent
                                        * @extends DragEvent
                                        */

DragOverEvent.type = 'drag:over';
DragOverEvent.cancelable = true;
class DragOutEvent extends DragEvent {

  /**
   * Draggable container you are over
   * @property overContainer
   * @type {HTMLElement}
   * @readonly
   */
  get overContainer() {
    return this.data.overContainer;
  }

  /**
   * Draggable element you left
   * @property over
   * @type {HTMLElement}
   * @readonly
   */
  get over() {
    return this.data.over;
  }
}

exports.DragOutEvent = DragOutEvent; /**
                                      * Drag over container event
                                      * @class DragOverContainerEvent
                                      * @module DragOverContainerEvent
                                      * @extends DragEvent
                                      */

DragOutEvent.type = 'drag:out';
class DragOverContainerEvent extends DragEvent {

  /**
   * Draggable container you are over
   * @property overContainer
   * @type {HTMLElement}
   * @readonly
   */
  get overContainer() {
    return this.data.overContainer;
  }
}

exports.DragOverContainerEvent = DragOverContainerEvent; /**
                                                          * Drag out container event
                                                          * @class DragOutContainerEvent
                                                          * @module DragOutContainerEvent
                                                          * @extends DragEvent
                                                          */

DragOverContainerEvent.type = 'drag:over:container';
class DragOutContainerEvent extends DragEvent {

  /**
   * Draggable container you left
   * @property overContainer
   * @type {HTMLElement}
   * @readonly
   */
  get overContainer() {
    return this.data.overContainer;
  }
}

exports.DragOutContainerEvent = DragOutContainerEvent; /**
                                                        * Drag pressure event
                                                        * @class DragPressureEvent
                                                        * @module DragPressureEvent
                                                        * @extends DragEvent
                                                        */

DragOutContainerEvent.type = 'drag:out:container';
class DragPressureEvent extends DragEvent {

  /**
   * Pressure applied on draggable element
   * @property pressure
   * @type {Number}
   * @readonly
   */
  get pressure() {
    return this.data.pressure;
  }
}

exports.DragPressureEvent = DragPressureEvent; /**
                                                * Drag stop event
                                                * @class DragStopEvent
                                                * @module DragStopEvent
                                                * @extends DragEvent
                                                */

DragPressureEvent.type = 'drag:pressure';
class DragStopEvent extends DragEvent {}
exports.DragStopEvent = DragStopEvent;
DragStopEvent.type = 'drag:stop';

/***/ }),
/* 66 */
/***/ (function(module, exports, __nested_webpack_require_186264__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.Plugins = exports.Sensors = exports.Sortable = exports.Swappable = exports.Droppable = exports.Draggable = exports.BasePlugin = exports.BaseEvent = undefined;

var _Draggable = __nested_webpack_require_186264__(5);

Object.defineProperty(exports, 'Draggable', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Draggable).default;
  }
});

var _Droppable = __nested_webpack_require_186264__(34);

Object.defineProperty(exports, 'Droppable', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Droppable).default;
  }
});

var _Swappable = __nested_webpack_require_186264__(31);

Object.defineProperty(exports, 'Swappable', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Swappable).default;
  }
});

var _Sortable = __nested_webpack_require_186264__(28);

Object.defineProperty(exports, 'Sortable', {
  enumerable: true,
  get: function () {
    return _interopRequireDefault(_Sortable).default;
  }
});

var _AbstractEvent = __nested_webpack_require_186264__(0);

var _AbstractEvent2 = _interopRequireDefault(_AbstractEvent);

var _AbstractPlugin = __nested_webpack_require_186264__(1);

var _AbstractPlugin2 = _interopRequireDefault(_AbstractPlugin);

var _Sensors = __nested_webpack_require_186264__(6);

var Sensors = _interopRequireWildcard(_Sensors);

var _Plugins = __nested_webpack_require_186264__(25);

var Plugins = _interopRequireWildcard(_Plugins);

function _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.BaseEvent = _AbstractEvent2.default;
exports.BasePlugin = _AbstractPlugin2.default;
exports.Sensors = Sensors;
exports.Plugins = Plugins;

/***/ })
/******/ ]);
});

/***/ }),

/***/ "./node_modules/alpinejs/dist/module.esm.js":
/*!**************************************************!*\
  !*** ./node_modules/alpinejs/dist/module.esm.js ***!
  \**************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* binding */ module_default)
/* harmony export */ });
// packages/alpinejs/src/scheduler.js
var flushPending = false;
var flushing = false;
var queue = [];
function scheduler(callback) {
  queueJob(callback);
}
function queueJob(job) {
  if (!queue.includes(job))
    queue.push(job);
  queueFlush();
}
function dequeueJob(job) {
  let index = queue.indexOf(job);
  if (index !== -1)
    queue.splice(index, 1);
}
function queueFlush() {
  if (!flushing && !flushPending) {
    flushPending = true;
    queueMicrotask(flushJobs);
  }
}
function flushJobs() {
  flushPending = false;
  flushing = true;
  for (let i = 0; i < queue.length; i++) {
    queue[i]();
  }
  queue.length = 0;
  flushing = false;
}

// packages/alpinejs/src/reactivity.js
var reactive;
var effect;
var release;
var raw;
var shouldSchedule = true;
function disableEffectScheduling(callback) {
  shouldSchedule = false;
  callback();
  shouldSchedule = true;
}
function setReactivityEngine(engine) {
  reactive = engine.reactive;
  release = engine.release;
  effect = (callback) => engine.effect(callback, {scheduler: (task) => {
    if (shouldSchedule) {
      scheduler(task);
    } else {
      task();
    }
  }});
  raw = engine.raw;
}
function overrideEffect(override) {
  effect = override;
}
function elementBoundEffect(el) {
  let cleanup2 = () => {
  };
  let wrappedEffect = (callback) => {
    let effectReference = effect(callback);
    if (!el._x_effects) {
      el._x_effects = new Set();
      el._x_runEffects = () => {
        el._x_effects.forEach((i) => i());
      };
    }
    el._x_effects.add(effectReference);
    cleanup2 = () => {
      if (effectReference === void 0)
        return;
      el._x_effects.delete(effectReference);
      release(effectReference);
    };
    return effectReference;
  };
  return [wrappedEffect, () => {
    cleanup2();
  }];
}

// packages/alpinejs/src/mutation.js
var onAttributeAddeds = [];
var onElRemoveds = [];
var onElAddeds = [];
function onElAdded(callback) {
  onElAddeds.push(callback);
}
function onElRemoved(el, callback) {
  if (typeof callback === "function") {
    if (!el._x_cleanups)
      el._x_cleanups = [];
    el._x_cleanups.push(callback);
  } else {
    callback = el;
    onElRemoveds.push(callback);
  }
}
function onAttributesAdded(callback) {
  onAttributeAddeds.push(callback);
}
function onAttributeRemoved(el, name, callback) {
  if (!el._x_attributeCleanups)
    el._x_attributeCleanups = {};
  if (!el._x_attributeCleanups[name])
    el._x_attributeCleanups[name] = [];
  el._x_attributeCleanups[name].push(callback);
}
function cleanupAttributes(el, names) {
  if (!el._x_attributeCleanups)
    return;
  Object.entries(el._x_attributeCleanups).forEach(([name, value]) => {
    if (names === void 0 || names.includes(name)) {
      value.forEach((i) => i());
      delete el._x_attributeCleanups[name];
    }
  });
}
var observer = new MutationObserver(onMutate);
var currentlyObserving = false;
function startObservingMutations() {
  observer.observe(document, {subtree: true, childList: true, attributes: true, attributeOldValue: true});
  currentlyObserving = true;
}
function stopObservingMutations() {
  flushObserver();
  observer.disconnect();
  currentlyObserving = false;
}
var recordQueue = [];
var willProcessRecordQueue = false;
function flushObserver() {
  recordQueue = recordQueue.concat(observer.takeRecords());
  if (recordQueue.length && !willProcessRecordQueue) {
    willProcessRecordQueue = true;
    queueMicrotask(() => {
      processRecordQueue();
      willProcessRecordQueue = false;
    });
  }
}
function processRecordQueue() {
  onMutate(recordQueue);
  recordQueue.length = 0;
}
function mutateDom(callback) {
  if (!currentlyObserving)
    return callback();
  stopObservingMutations();
  let result = callback();
  startObservingMutations();
  return result;
}
var isCollecting = false;
var deferredMutations = [];
function deferMutations() {
  isCollecting = true;
}
function flushAndStopDeferringMutations() {
  isCollecting = false;
  onMutate(deferredMutations);
  deferredMutations = [];
}
function onMutate(mutations) {
  if (isCollecting) {
    deferredMutations = deferredMutations.concat(mutations);
    return;
  }
  let addedNodes = [];
  let removedNodes = [];
  let addedAttributes = new Map();
  let removedAttributes = new Map();
  for (let i = 0; i < mutations.length; i++) {
    if (mutations[i].target._x_ignoreMutationObserver)
      continue;
    if (mutations[i].type === "childList") {
      mutations[i].addedNodes.forEach((node) => node.nodeType === 1 && addedNodes.push(node));
      mutations[i].removedNodes.forEach((node) => node.nodeType === 1 && removedNodes.push(node));
    }
    if (mutations[i].type === "attributes") {
      let el = mutations[i].target;
      let name = mutations[i].attributeName;
      let oldValue = mutations[i].oldValue;
      let add2 = () => {
        if (!addedAttributes.has(el))
          addedAttributes.set(el, []);
        addedAttributes.get(el).push({name, value: el.getAttribute(name)});
      };
      let remove = () => {
        if (!removedAttributes.has(el))
          removedAttributes.set(el, []);
        removedAttributes.get(el).push(name);
      };
      if (el.hasAttribute(name) && oldValue === null) {
        add2();
      } else if (el.hasAttribute(name)) {
        remove();
        add2();
      } else {
        remove();
      }
    }
  }
  removedAttributes.forEach((attrs, el) => {
    cleanupAttributes(el, attrs);
  });
  addedAttributes.forEach((attrs, el) => {
    onAttributeAddeds.forEach((i) => i(el, attrs));
  });
  for (let node of removedNodes) {
    if (addedNodes.includes(node))
      continue;
    onElRemoveds.forEach((i) => i(node));
    if (node._x_cleanups) {
      while (node._x_cleanups.length)
        node._x_cleanups.pop()();
    }
  }
  addedNodes.forEach((node) => {
    node._x_ignoreSelf = true;
    node._x_ignore = true;
  });
  for (let node of addedNodes) {
    if (removedNodes.includes(node))
      continue;
    if (!node.isConnected)
      continue;
    delete node._x_ignoreSelf;
    delete node._x_ignore;
    onElAddeds.forEach((i) => i(node));
    node._x_ignore = true;
    node._x_ignoreSelf = true;
  }
  addedNodes.forEach((node) => {
    delete node._x_ignoreSelf;
    delete node._x_ignore;
  });
  addedNodes = null;
  removedNodes = null;
  addedAttributes = null;
  removedAttributes = null;
}

// packages/alpinejs/src/scope.js
function scope(node) {
  return mergeProxies(closestDataStack(node));
}
function addScopeToNode(node, data2, referenceNode) {
  node._x_dataStack = [data2, ...closestDataStack(referenceNode || node)];
  return () => {
    node._x_dataStack = node._x_dataStack.filter((i) => i !== data2);
  };
}
function refreshScope(element, scope2) {
  let existingScope = element._x_dataStack[0];
  Object.entries(scope2).forEach(([key, value]) => {
    existingScope[key] = value;
  });
}
function closestDataStack(node) {
  if (node._x_dataStack)
    return node._x_dataStack;
  if (typeof ShadowRoot === "function" && node instanceof ShadowRoot) {
    return closestDataStack(node.host);
  }
  if (!node.parentNode) {
    return [];
  }
  return closestDataStack(node.parentNode);
}
function mergeProxies(objects) {
  let thisProxy = new Proxy({}, {
    ownKeys: () => {
      return Array.from(new Set(objects.flatMap((i) => Object.keys(i))));
    },
    has: (target, name) => {
      return objects.some((obj) => obj.hasOwnProperty(name));
    },
    get: (target, name) => {
      return (objects.find((obj) => {
        if (obj.hasOwnProperty(name)) {
          let descriptor = Object.getOwnPropertyDescriptor(obj, name);
          if (descriptor.get && descriptor.get._x_alreadyBound || descriptor.set && descriptor.set._x_alreadyBound) {
            return true;
          }
          if ((descriptor.get || descriptor.set) && descriptor.enumerable) {
            let getter = descriptor.get;
            let setter = descriptor.set;
            let property = descriptor;
            getter = getter && getter.bind(thisProxy);
            setter = setter && setter.bind(thisProxy);
            if (getter)
              getter._x_alreadyBound = true;
            if (setter)
              setter._x_alreadyBound = true;
            Object.defineProperty(obj, name, {
              ...property,
              get: getter,
              set: setter
            });
          }
          return true;
        }
        return false;
      }) || {})[name];
    },
    set: (target, name, value) => {
      let closestObjectWithKey = objects.find((obj) => obj.hasOwnProperty(name));
      if (closestObjectWithKey) {
        closestObjectWithKey[name] = value;
      } else {
        objects[objects.length - 1][name] = value;
      }
      return true;
    }
  });
  return thisProxy;
}

// packages/alpinejs/src/interceptor.js
function initInterceptors(data2) {
  let isObject2 = (val) => typeof val === "object" && !Array.isArray(val) && val !== null;
  let recurse = (obj, basePath = "") => {
    Object.entries(Object.getOwnPropertyDescriptors(obj)).forEach(([key, {value, enumerable}]) => {
      if (enumerable === false || value === void 0)
        return;
      let path = basePath === "" ? key : `${basePath}.${key}`;
      if (typeof value === "object" && value !== null && value._x_interceptor) {
        obj[key] = value.initialize(data2, path, key);
      } else {
        if (isObject2(value) && value !== obj && !(value instanceof Element)) {
          recurse(value, path);
        }
      }
    });
  };
  return recurse(data2);
}
function interceptor(callback, mutateObj = () => {
}) {
  let obj = {
    initialValue: void 0,
    _x_interceptor: true,
    initialize(data2, path, key) {
      return callback(this.initialValue, () => get(data2, path), (value) => set(data2, path, value), path, key);
    }
  };
  mutateObj(obj);
  return (initialValue) => {
    if (typeof initialValue === "object" && initialValue !== null && initialValue._x_interceptor) {
      let initialize = obj.initialize.bind(obj);
      obj.initialize = (data2, path, key) => {
        let innerValue = initialValue.initialize(data2, path, key);
        obj.initialValue = innerValue;
        return initialize(data2, path, key);
      };
    } else {
      obj.initialValue = initialValue;
    }
    return obj;
  };
}
function get(obj, path) {
  return path.split(".").reduce((carry, segment) => carry[segment], obj);
}
function set(obj, path, value) {
  if (typeof path === "string")
    path = path.split(".");
  if (path.length === 1)
    obj[path[0]] = value;
  else if (path.length === 0)
    throw error;
  else {
    if (obj[path[0]])
      return set(obj[path[0]], path.slice(1), value);
    else {
      obj[path[0]] = {};
      return set(obj[path[0]], path.slice(1), value);
    }
  }
}

// packages/alpinejs/src/magics.js
var magics = {};
function magic(name, callback) {
  magics[name] = callback;
}
function injectMagics(obj, el) {
  Object.entries(magics).forEach(([name, callback]) => {
    Object.defineProperty(obj, `$${name}`, {
      get() {
        let [utilities, cleanup2] = getElementBoundUtilities(el);
        utilities = {interceptor, ...utilities};
        onElRemoved(el, cleanup2);
        return callback(el, utilities);
      },
      enumerable: false
    });
  });
  return obj;
}

// packages/alpinejs/src/utils/error.js
function tryCatch(el, expression, callback, ...args) {
  try {
    return callback(...args);
  } catch (e) {
    handleError(e, el, expression);
  }
}
function handleError(error2, el, expression = void 0) {
  Object.assign(error2, {el, expression});
  console.warn(`Alpine Expression Error: ${error2.message}

${expression ? 'Expression: "' + expression + '"\n\n' : ""}`, el);
  setTimeout(() => {
    throw error2;
  }, 0);
}

// packages/alpinejs/src/evaluator.js
var shouldAutoEvaluateFunctions = true;
function dontAutoEvaluateFunctions(callback) {
  let cache = shouldAutoEvaluateFunctions;
  shouldAutoEvaluateFunctions = false;
  callback();
  shouldAutoEvaluateFunctions = cache;
}
function evaluate(el, expression, extras = {}) {
  let result;
  evaluateLater(el, expression)((value) => result = value, extras);
  return result;
}
function evaluateLater(...args) {
  return theEvaluatorFunction(...args);
}
var theEvaluatorFunction = normalEvaluator;
function setEvaluator(newEvaluator) {
  theEvaluatorFunction = newEvaluator;
}
function normalEvaluator(el, expression) {
  let overriddenMagics = {};
  injectMagics(overriddenMagics, el);
  let dataStack = [overriddenMagics, ...closestDataStack(el)];
  if (typeof expression === "function") {
    return generateEvaluatorFromFunction(dataStack, expression);
  }
  let evaluator = generateEvaluatorFromString(dataStack, expression, el);
  return tryCatch.bind(null, el, expression, evaluator);
}
function generateEvaluatorFromFunction(dataStack, func) {
  return (receiver = () => {
  }, {scope: scope2 = {}, params = []} = {}) => {
    let result = func.apply(mergeProxies([scope2, ...dataStack]), params);
    runIfTypeOfFunction(receiver, result);
  };
}
var evaluatorMemo = {};
function generateFunctionFromString(expression, el) {
  if (evaluatorMemo[expression]) {
    return evaluatorMemo[expression];
  }
  let AsyncFunction = Object.getPrototypeOf(async function() {
  }).constructor;
  let rightSideSafeExpression = /^[\n\s]*if.*\(.*\)/.test(expression) || /^(let|const)\s/.test(expression) ? `(async()=>{ ${expression} })()` : expression;
  const safeAsyncFunction = () => {
    try {
      return new AsyncFunction(["__self", "scope"], `with (scope) { __self.result = ${rightSideSafeExpression} }; __self.finished = true; return __self.result;`);
    } catch (error2) {
      handleError(error2, el, expression);
      return Promise.resolve();
    }
  };
  let func = safeAsyncFunction();
  evaluatorMemo[expression] = func;
  return func;
}
function generateEvaluatorFromString(dataStack, expression, el) {
  let func = generateFunctionFromString(expression, el);
  return (receiver = () => {
  }, {scope: scope2 = {}, params = []} = {}) => {
    func.result = void 0;
    func.finished = false;
    let completeScope = mergeProxies([scope2, ...dataStack]);
    if (typeof func === "function") {
      let promise = func(func, completeScope).catch((error2) => handleError(error2, el, expression));
      if (func.finished) {
        runIfTypeOfFunction(receiver, func.result, completeScope, params, el);
        func.result = void 0;
      } else {
        promise.then((result) => {
          runIfTypeOfFunction(receiver, result, completeScope, params, el);
        }).catch((error2) => handleError(error2, el, expression)).finally(() => func.result = void 0);
      }
    }
  };
}
function runIfTypeOfFunction(receiver, value, scope2, params, el) {
  if (shouldAutoEvaluateFunctions && typeof value === "function") {
    let result = value.apply(scope2, params);
    if (result instanceof Promise) {
      result.then((i) => runIfTypeOfFunction(receiver, i, scope2, params)).catch((error2) => handleError(error2, el, value));
    } else {
      receiver(result);
    }
  } else if (typeof value === "object" && value instanceof Promise) {
    value.then((i) => receiver(i));
  } else {
    receiver(value);
  }
}

// packages/alpinejs/src/directives.js
var prefixAsString = "x-";
function prefix(subject = "") {
  return prefixAsString + subject;
}
function setPrefix(newPrefix) {
  prefixAsString = newPrefix;
}
var directiveHandlers = {};
function directive(name, callback) {
  directiveHandlers[name] = callback;
  return {
    before(directive2) {
      if (!directiveHandlers[directive2]) {
        console.warn("Cannot find directive `${directive}`. `${name}` will use the default order of execution");
        return;
      }
      const pos = directiveOrder.indexOf(directive2) ?? directiveOrder.indexOf("DEFAULT");
      if (pos >= 0) {
        directiveOrder.splice(pos, 0, name);
      }
    }
  };
}
function directives(el, attributes, originalAttributeOverride) {
  attributes = Array.from(attributes);
  if (el._x_virtualDirectives) {
    let vAttributes = Object.entries(el._x_virtualDirectives).map(([name, value]) => ({name, value}));
    let staticAttributes = attributesOnly(vAttributes);
    vAttributes = vAttributes.map((attribute) => {
      if (staticAttributes.find((attr) => attr.name === attribute.name)) {
        return {
          name: `x-bind:${attribute.name}`,
          value: `"${attribute.value}"`
        };
      }
      return attribute;
    });
    attributes = attributes.concat(vAttributes);
  }
  let transformedAttributeMap = {};
  let directives2 = attributes.map(toTransformedAttributes((newName, oldName) => transformedAttributeMap[newName] = oldName)).filter(outNonAlpineAttributes).map(toParsedDirectives(transformedAttributeMap, originalAttributeOverride)).sort(byPriority);
  return directives2.map((directive2) => {
    return getDirectiveHandler(el, directive2);
  });
}
function attributesOnly(attributes) {
  return Array.from(attributes).map(toTransformedAttributes()).filter((attr) => !outNonAlpineAttributes(attr));
}
var isDeferringHandlers = false;
var directiveHandlerStacks = new Map();
var currentHandlerStackKey = Symbol();
function deferHandlingDirectives(callback) {
  isDeferringHandlers = true;
  let key = Symbol();
  currentHandlerStackKey = key;
  directiveHandlerStacks.set(key, []);
  let flushHandlers = () => {
    while (directiveHandlerStacks.get(key).length)
      directiveHandlerStacks.get(key).shift()();
    directiveHandlerStacks.delete(key);
  };
  let stopDeferring = () => {
    isDeferringHandlers = false;
    flushHandlers();
  };
  callback(flushHandlers);
  stopDeferring();
}
function getElementBoundUtilities(el) {
  let cleanups = [];
  let cleanup2 = (callback) => cleanups.push(callback);
  let [effect3, cleanupEffect] = elementBoundEffect(el);
  cleanups.push(cleanupEffect);
  let utilities = {
    Alpine: alpine_default,
    effect: effect3,
    cleanup: cleanup2,
    evaluateLater: evaluateLater.bind(evaluateLater, el),
    evaluate: evaluate.bind(evaluate, el)
  };
  let doCleanup = () => cleanups.forEach((i) => i());
  return [utilities, doCleanup];
}
function getDirectiveHandler(el, directive2) {
  let noop = () => {
  };
  let handler3 = directiveHandlers[directive2.type] || noop;
  let [utilities, cleanup2] = getElementBoundUtilities(el);
  onAttributeRemoved(el, directive2.original, cleanup2);
  let fullHandler = () => {
    if (el._x_ignore || el._x_ignoreSelf)
      return;
    handler3.inline && handler3.inline(el, directive2, utilities);
    handler3 = handler3.bind(handler3, el, directive2, utilities);
    isDeferringHandlers ? directiveHandlerStacks.get(currentHandlerStackKey).push(handler3) : handler3();
  };
  fullHandler.runCleanups = cleanup2;
  return fullHandler;
}
var startingWith = (subject, replacement) => ({name, value}) => {
  if (name.startsWith(subject))
    name = name.replace(subject, replacement);
  return {name, value};
};
var into = (i) => i;
function toTransformedAttributes(callback = () => {
}) {
  return ({name, value}) => {
    let {name: newName, value: newValue} = attributeTransformers.reduce((carry, transform) => {
      return transform(carry);
    }, {name, value});
    if (newName !== name)
      callback(newName, name);
    return {name: newName, value: newValue};
  };
}
var attributeTransformers = [];
function mapAttributes(callback) {
  attributeTransformers.push(callback);
}
function outNonAlpineAttributes({name}) {
  return alpineAttributeRegex().test(name);
}
var alpineAttributeRegex = () => new RegExp(`^${prefixAsString}([^:^.]+)\\b`);
function toParsedDirectives(transformedAttributeMap, originalAttributeOverride) {
  return ({name, value}) => {
    let typeMatch = name.match(alpineAttributeRegex());
    let valueMatch = name.match(/:([a-zA-Z0-9\-:]+)/);
    let modifiers = name.match(/\.[^.\]]+(?=[^\]]*$)/g) || [];
    let original = originalAttributeOverride || transformedAttributeMap[name] || name;
    return {
      type: typeMatch ? typeMatch[1] : null,
      value: valueMatch ? valueMatch[1] : null,
      modifiers: modifiers.map((i) => i.replace(".", "")),
      expression: value,
      original
    };
  };
}
var DEFAULT = "DEFAULT";
var directiveOrder = [
  "ignore",
  "ref",
  "data",
  "id",
  "radio",
  "tabs",
  "switch",
  "disclosure",
  "menu",
  "listbox",
  "combobox",
  "bind",
  "init",
  "for",
  "mask",
  "model",
  "modelable",
  "transition",
  "show",
  "if",
  DEFAULT,
  "teleport"
];
function byPriority(a, b) {
  let typeA = directiveOrder.indexOf(a.type) === -1 ? DEFAULT : a.type;
  let typeB = directiveOrder.indexOf(b.type) === -1 ? DEFAULT : b.type;
  return directiveOrder.indexOf(typeA) - directiveOrder.indexOf(typeB);
}

// packages/alpinejs/src/utils/dispatch.js
function dispatch(el, name, detail = {}) {
  el.dispatchEvent(new CustomEvent(name, {
    detail,
    bubbles: true,
    composed: true,
    cancelable: true
  }));
}

// packages/alpinejs/src/utils/walk.js
function walk(el, callback) {
  if (typeof ShadowRoot === "function" && el instanceof ShadowRoot) {
    Array.from(el.children).forEach((el2) => walk(el2, callback));
    return;
  }
  let skip = false;
  callback(el, () => skip = true);
  if (skip)
    return;
  let node = el.firstElementChild;
  while (node) {
    walk(node, callback, false);
    node = node.nextElementSibling;
  }
}

// packages/alpinejs/src/utils/warn.js
function warn(message, ...args) {
  console.warn(`Alpine Warning: ${message}`, ...args);
}

// packages/alpinejs/src/lifecycle.js
function start() {
  if (!document.body)
    warn("Unable to initialize. Trying to load Alpine before `<body>` is available. Did you forget to add `defer` in Alpine's `<script>` tag?");
  dispatch(document, "alpine:init");
  dispatch(document, "alpine:initializing");
  startObservingMutations();
  onElAdded((el) => initTree(el, walk));
  onElRemoved((el) => destroyTree(el));
  onAttributesAdded((el, attrs) => {
    directives(el, attrs).forEach((handle) => handle());
  });
  let outNestedComponents = (el) => !closestRoot(el.parentElement, true);
  Array.from(document.querySelectorAll(allSelectors())).filter(outNestedComponents).forEach((el) => {
    initTree(el);
  });
  dispatch(document, "alpine:initialized");
}
var rootSelectorCallbacks = [];
var initSelectorCallbacks = [];
function rootSelectors() {
  return rootSelectorCallbacks.map((fn) => fn());
}
function allSelectors() {
  return rootSelectorCallbacks.concat(initSelectorCallbacks).map((fn) => fn());
}
function addRootSelector(selectorCallback) {
  rootSelectorCallbacks.push(selectorCallback);
}
function addInitSelector(selectorCallback) {
  initSelectorCallbacks.push(selectorCallback);
}
function closestRoot(el, includeInitSelectors = false) {
  return findClosest(el, (element) => {
    const selectors = includeInitSelectors ? allSelectors() : rootSelectors();
    if (selectors.some((selector) => element.matches(selector)))
      return true;
  });
}
function findClosest(el, callback) {
  if (!el)
    return;
  if (callback(el))
    return el;
  if (el._x_teleportBack)
    el = el._x_teleportBack;
  if (!el.parentElement)
    return;
  return findClosest(el.parentElement, callback);
}
function isRoot(el) {
  return rootSelectors().some((selector) => el.matches(selector));
}
var initInterceptors2 = [];
function interceptInit(callback) {
  initInterceptors2.push(callback);
}
function initTree(el, walker = walk, intercept = () => {
}) {
  deferHandlingDirectives(() => {
    walker(el, (el2, skip) => {
      intercept(el2, skip);
      initInterceptors2.forEach((i) => i(el2, skip));
      directives(el2, el2.attributes).forEach((handle) => handle());
      el2._x_ignore && skip();
    });
  });
}
function destroyTree(root) {
  walk(root, (el) => cleanupAttributes(el));
}

// packages/alpinejs/src/nextTick.js
var tickStack = [];
var isHolding = false;
function nextTick(callback = () => {
}) {
  queueMicrotask(() => {
    isHolding || setTimeout(() => {
      releaseNextTicks();
    });
  });
  return new Promise((res) => {
    tickStack.push(() => {
      callback();
      res();
    });
  });
}
function releaseNextTicks() {
  isHolding = false;
  while (tickStack.length)
    tickStack.shift()();
}
function holdNextTicks() {
  isHolding = true;
}

// packages/alpinejs/src/utils/classes.js
function setClasses(el, value) {
  if (Array.isArray(value)) {
    return setClassesFromString(el, value.join(" "));
  } else if (typeof value === "object" && value !== null) {
    return setClassesFromObject(el, value);
  } else if (typeof value === "function") {
    return setClasses(el, value());
  }
  return setClassesFromString(el, value);
}
function setClassesFromString(el, classString) {
  let split = (classString2) => classString2.split(" ").filter(Boolean);
  let missingClasses = (classString2) => classString2.split(" ").filter((i) => !el.classList.contains(i)).filter(Boolean);
  let addClassesAndReturnUndo = (classes) => {
    el.classList.add(...classes);
    return () => {
      el.classList.remove(...classes);
    };
  };
  classString = classString === true ? classString = "" : classString || "";
  return addClassesAndReturnUndo(missingClasses(classString));
}
function setClassesFromObject(el, classObject) {
  let split = (classString) => classString.split(" ").filter(Boolean);
  let forAdd = Object.entries(classObject).flatMap(([classString, bool]) => bool ? split(classString) : false).filter(Boolean);
  let forRemove = Object.entries(classObject).flatMap(([classString, bool]) => !bool ? split(classString) : false).filter(Boolean);
  let added = [];
  let removed = [];
  forRemove.forEach((i) => {
    if (el.classList.contains(i)) {
      el.classList.remove(i);
      removed.push(i);
    }
  });
  forAdd.forEach((i) => {
    if (!el.classList.contains(i)) {
      el.classList.add(i);
      added.push(i);
    }
  });
  return () => {
    removed.forEach((i) => el.classList.add(i));
    added.forEach((i) => el.classList.remove(i));
  };
}

// packages/alpinejs/src/utils/styles.js
function setStyles(el, value) {
  if (typeof value === "object" && value !== null) {
    return setStylesFromObject(el, value);
  }
  return setStylesFromString(el, value);
}
function setStylesFromObject(el, value) {
  let previousStyles = {};
  Object.entries(value).forEach(([key, value2]) => {
    previousStyles[key] = el.style[key];
    if (!key.startsWith("--")) {
      key = kebabCase(key);
    }
    el.style.setProperty(key, value2);
  });
  setTimeout(() => {
    if (el.style.length === 0) {
      el.removeAttribute("style");
    }
  });
  return () => {
    setStyles(el, previousStyles);
  };
}
function setStylesFromString(el, value) {
  let cache = el.getAttribute("style", value);
  el.setAttribute("style", value);
  return () => {
    el.setAttribute("style", cache || "");
  };
}
function kebabCase(subject) {
  return subject.replace(/([a-z])([A-Z])/g, "$1-$2").toLowerCase();
}

// packages/alpinejs/src/utils/once.js
function once(callback, fallback = () => {
}) {
  let called = false;
  return function() {
    if (!called) {
      called = true;
      callback.apply(this, arguments);
    } else {
      fallback.apply(this, arguments);
    }
  };
}

// packages/alpinejs/src/directives/x-transition.js
directive("transition", (el, {value, modifiers, expression}, {evaluate: evaluate2}) => {
  if (typeof expression === "function")
    expression = evaluate2(expression);
  if (!expression) {
    registerTransitionsFromHelper(el, modifiers, value);
  } else {
    registerTransitionsFromClassString(el, expression, value);
  }
});
function registerTransitionsFromClassString(el, classString, stage) {
  registerTransitionObject(el, setClasses, "");
  let directiveStorageMap = {
    enter: (classes) => {
      el._x_transition.enter.during = classes;
    },
    "enter-start": (classes) => {
      el._x_transition.enter.start = classes;
    },
    "enter-end": (classes) => {
      el._x_transition.enter.end = classes;
    },
    leave: (classes) => {
      el._x_transition.leave.during = classes;
    },
    "leave-start": (classes) => {
      el._x_transition.leave.start = classes;
    },
    "leave-end": (classes) => {
      el._x_transition.leave.end = classes;
    }
  };
  directiveStorageMap[stage](classString);
}
function registerTransitionsFromHelper(el, modifiers, stage) {
  registerTransitionObject(el, setStyles);
  let doesntSpecify = !modifiers.includes("in") && !modifiers.includes("out") && !stage;
  let transitioningIn = doesntSpecify || modifiers.includes("in") || ["enter"].includes(stage);
  let transitioningOut = doesntSpecify || modifiers.includes("out") || ["leave"].includes(stage);
  if (modifiers.includes("in") && !doesntSpecify) {
    modifiers = modifiers.filter((i, index) => index < modifiers.indexOf("out"));
  }
  if (modifiers.includes("out") && !doesntSpecify) {
    modifiers = modifiers.filter((i, index) => index > modifiers.indexOf("out"));
  }
  let wantsAll = !modifiers.includes("opacity") && !modifiers.includes("scale");
  let wantsOpacity = wantsAll || modifiers.includes("opacity");
  let wantsScale = wantsAll || modifiers.includes("scale");
  let opacityValue = wantsOpacity ? 0 : 1;
  let scaleValue = wantsScale ? modifierValue(modifiers, "scale", 95) / 100 : 1;
  let delay = modifierValue(modifiers, "delay", 0);
  let origin = modifierValue(modifiers, "origin", "center");
  let property = "opacity, transform";
  let durationIn = modifierValue(modifiers, "duration", 150) / 1e3;
  let durationOut = modifierValue(modifiers, "duration", 75) / 1e3;
  let easing = `cubic-bezier(0.4, 0.0, 0.2, 1)`;
  if (transitioningIn) {
    el._x_transition.enter.during = {
      transformOrigin: origin,
      transitionDelay: delay,
      transitionProperty: property,
      transitionDuration: `${durationIn}s`,
      transitionTimingFunction: easing
    };
    el._x_transition.enter.start = {
      opacity: opacityValue,
      transform: `scale(${scaleValue})`
    };
    el._x_transition.enter.end = {
      opacity: 1,
      transform: `scale(1)`
    };
  }
  if (transitioningOut) {
    el._x_transition.leave.during = {
      transformOrigin: origin,
      transitionDelay: delay,
      transitionProperty: property,
      transitionDuration: `${durationOut}s`,
      transitionTimingFunction: easing
    };
    el._x_transition.leave.start = {
      opacity: 1,
      transform: `scale(1)`
    };
    el._x_transition.leave.end = {
      opacity: opacityValue,
      transform: `scale(${scaleValue})`
    };
  }
}
function registerTransitionObject(el, setFunction, defaultValue = {}) {
  if (!el._x_transition)
    el._x_transition = {
      enter: {during: defaultValue, start: defaultValue, end: defaultValue},
      leave: {during: defaultValue, start: defaultValue, end: defaultValue},
      in(before = () => {
      }, after = () => {
      }) {
        transition(el, setFunction, {
          during: this.enter.during,
          start: this.enter.start,
          end: this.enter.end
        }, before, after);
      },
      out(before = () => {
      }, after = () => {
      }) {
        transition(el, setFunction, {
          during: this.leave.during,
          start: this.leave.start,
          end: this.leave.end
        }, before, after);
      }
    };
}
window.Element.prototype._x_toggleAndCascadeWithTransitions = function(el, value, show, hide) {
  const nextTick2 = document.visibilityState === "visible" ? requestAnimationFrame : setTimeout;
  let clickAwayCompatibleShow = () => nextTick2(show);
  if (value) {
    if (el._x_transition && (el._x_transition.enter || el._x_transition.leave)) {
      el._x_transition.enter && (Object.entries(el._x_transition.enter.during).length || Object.entries(el._x_transition.enter.start).length || Object.entries(el._x_transition.enter.end).length) ? el._x_transition.in(show) : clickAwayCompatibleShow();
    } else {
      el._x_transition ? el._x_transition.in(show) : clickAwayCompatibleShow();
    }
    return;
  }
  el._x_hidePromise = el._x_transition ? new Promise((resolve, reject) => {
    el._x_transition.out(() => {
    }, () => resolve(hide));
    el._x_transitioning.beforeCancel(() => reject({isFromCancelledTransition: true}));
  }) : Promise.resolve(hide);
  queueMicrotask(() => {
    let closest = closestHide(el);
    if (closest) {
      if (!closest._x_hideChildren)
        closest._x_hideChildren = [];
      closest._x_hideChildren.push(el);
    } else {
      nextTick2(() => {
        let hideAfterChildren = (el2) => {
          let carry = Promise.all([
            el2._x_hidePromise,
            ...(el2._x_hideChildren || []).map(hideAfterChildren)
          ]).then(([i]) => i());
          delete el2._x_hidePromise;
          delete el2._x_hideChildren;
          return carry;
        };
        hideAfterChildren(el).catch((e) => {
          if (!e.isFromCancelledTransition)
            throw e;
        });
      });
    }
  });
};
function closestHide(el) {
  let parent = el.parentNode;
  if (!parent)
    return;
  return parent._x_hidePromise ? parent : closestHide(parent);
}
function transition(el, setFunction, {during, start: start2, end} = {}, before = () => {
}, after = () => {
}) {
  if (el._x_transitioning)
    el._x_transitioning.cancel();
  if (Object.keys(during).length === 0 && Object.keys(start2).length === 0 && Object.keys(end).length === 0) {
    before();
    after();
    return;
  }
  let undoStart, undoDuring, undoEnd;
  performTransition(el, {
    start() {
      undoStart = setFunction(el, start2);
    },
    during() {
      undoDuring = setFunction(el, during);
    },
    before,
    end() {
      undoStart();
      undoEnd = setFunction(el, end);
    },
    after,
    cleanup() {
      undoDuring();
      undoEnd();
    }
  });
}
function performTransition(el, stages) {
  let interrupted, reachedBefore, reachedEnd;
  let finish = once(() => {
    mutateDom(() => {
      interrupted = true;
      if (!reachedBefore)
        stages.before();
      if (!reachedEnd) {
        stages.end();
        releaseNextTicks();
      }
      stages.after();
      if (el.isConnected)
        stages.cleanup();
      delete el._x_transitioning;
    });
  });
  el._x_transitioning = {
    beforeCancels: [],
    beforeCancel(callback) {
      this.beforeCancels.push(callback);
    },
    cancel: once(function() {
      while (this.beforeCancels.length) {
        this.beforeCancels.shift()();
      }
      ;
      finish();
    }),
    finish
  };
  mutateDom(() => {
    stages.start();
    stages.during();
  });
  holdNextTicks();
  requestAnimationFrame(() => {
    if (interrupted)
      return;
    let duration = Number(getComputedStyle(el).transitionDuration.replace(/,.*/, "").replace("s", "")) * 1e3;
    let delay = Number(getComputedStyle(el).transitionDelay.replace(/,.*/, "").replace("s", "")) * 1e3;
    if (duration === 0)
      duration = Number(getComputedStyle(el).animationDuration.replace("s", "")) * 1e3;
    mutateDom(() => {
      stages.before();
    });
    reachedBefore = true;
    requestAnimationFrame(() => {
      if (interrupted)
        return;
      mutateDom(() => {
        stages.end();
      });
      releaseNextTicks();
      setTimeout(el._x_transitioning.finish, duration + delay);
      reachedEnd = true;
    });
  });
}
function modifierValue(modifiers, key, fallback) {
  if (modifiers.indexOf(key) === -1)
    return fallback;
  const rawValue = modifiers[modifiers.indexOf(key) + 1];
  if (!rawValue)
    return fallback;
  if (key === "scale") {
    if (isNaN(rawValue))
      return fallback;
  }
  if (key === "duration") {
    let match = rawValue.match(/([0-9]+)ms/);
    if (match)
      return match[1];
  }
  if (key === "origin") {
    if (["top", "right", "left", "center", "bottom"].includes(modifiers[modifiers.indexOf(key) + 2])) {
      return [rawValue, modifiers[modifiers.indexOf(key) + 2]].join(" ");
    }
  }
  return rawValue;
}

// packages/alpinejs/src/clone.js
var isCloning = false;
function skipDuringClone(callback, fallback = () => {
}) {
  return (...args) => isCloning ? fallback(...args) : callback(...args);
}
function onlyDuringClone(callback) {
  return (...args) => isCloning && callback(...args);
}
function clone(oldEl, newEl) {
  if (!newEl._x_dataStack)
    newEl._x_dataStack = oldEl._x_dataStack;
  isCloning = true;
  dontRegisterReactiveSideEffects(() => {
    cloneTree(newEl);
  });
  isCloning = false;
}
function cloneTree(el) {
  let hasRunThroughFirstEl = false;
  let shallowWalker = (el2, callback) => {
    walk(el2, (el3, skip) => {
      if (hasRunThroughFirstEl && isRoot(el3))
        return skip();
      hasRunThroughFirstEl = true;
      callback(el3, skip);
    });
  };
  initTree(el, shallowWalker);
}
function dontRegisterReactiveSideEffects(callback) {
  let cache = effect;
  overrideEffect((callback2, el) => {
    let storedEffect = cache(callback2);
    release(storedEffect);
    return () => {
    };
  });
  callback();
  overrideEffect(cache);
}

// packages/alpinejs/src/utils/bind.js
function bind(el, name, value, modifiers = []) {
  if (!el._x_bindings)
    el._x_bindings = reactive({});
  el._x_bindings[name] = value;
  name = modifiers.includes("camel") ? camelCase(name) : name;
  switch (name) {
    case "value":
      bindInputValue(el, value);
      break;
    case "style":
      bindStyles(el, value);
      break;
    case "class":
      bindClasses(el, value);
      break;
    default:
      bindAttribute(el, name, value);
      break;
  }
}
function bindInputValue(el, value) {
  if (el.type === "radio") {
    if (el.attributes.value === void 0) {
      el.value = value;
    }
    if (window.fromModel) {
      el.checked = checkedAttrLooseCompare(el.value, value);
    }
  } else if (el.type === "checkbox") {
    if (Number.isInteger(value)) {
      el.value = value;
    } else if (!Number.isInteger(value) && !Array.isArray(value) && typeof value !== "boolean" && ![null, void 0].includes(value)) {
      el.value = String(value);
    } else {
      if (Array.isArray(value)) {
        el.checked = value.some((val) => checkedAttrLooseCompare(val, el.value));
      } else {
        el.checked = !!value;
      }
    }
  } else if (el.tagName === "SELECT") {
    updateSelect(el, value);
  } else {
    if (el.value === value)
      return;
    el.value = value;
  }
}
function bindClasses(el, value) {
  if (el._x_undoAddedClasses)
    el._x_undoAddedClasses();
  el._x_undoAddedClasses = setClasses(el, value);
}
function bindStyles(el, value) {
  if (el._x_undoAddedStyles)
    el._x_undoAddedStyles();
  el._x_undoAddedStyles = setStyles(el, value);
}
function bindAttribute(el, name, value) {
  if ([null, void 0, false].includes(value) && attributeShouldntBePreservedIfFalsy(name)) {
    el.removeAttribute(name);
  } else {
    if (isBooleanAttr(name))
      value = name;
    setIfChanged(el, name, value);
  }
}
function setIfChanged(el, attrName, value) {
  if (el.getAttribute(attrName) != value) {
    el.setAttribute(attrName, value);
  }
}
function updateSelect(el, value) {
  const arrayWrappedValue = [].concat(value).map((value2) => {
    return value2 + "";
  });
  Array.from(el.options).forEach((option) => {
    option.selected = arrayWrappedValue.includes(option.value);
  });
}
function camelCase(subject) {
  return subject.toLowerCase().replace(/-(\w)/g, (match, char) => char.toUpperCase());
}
function checkedAttrLooseCompare(valueA, valueB) {
  return valueA == valueB;
}
function isBooleanAttr(attrName) {
  const booleanAttributes = [
    "disabled",
    "checked",
    "required",
    "readonly",
    "hidden",
    "open",
    "selected",
    "autofocus",
    "itemscope",
    "multiple",
    "novalidate",
    "allowfullscreen",
    "allowpaymentrequest",
    "formnovalidate",
    "autoplay",
    "controls",
    "loop",
    "muted",
    "playsinline",
    "default",
    "ismap",
    "reversed",
    "async",
    "defer",
    "nomodule"
  ];
  return booleanAttributes.includes(attrName);
}
function attributeShouldntBePreservedIfFalsy(name) {
  return !["aria-pressed", "aria-checked", "aria-expanded", "aria-selected"].includes(name);
}
function getBinding(el, name, fallback) {
  if (el._x_bindings && el._x_bindings[name] !== void 0)
    return el._x_bindings[name];
  let attr = el.getAttribute(name);
  if (attr === null)
    return typeof fallback === "function" ? fallback() : fallback;
  if (attr === "")
    return true;
  if (isBooleanAttr(name)) {
    return !![name, "true"].includes(attr);
  }
  return attr;
}

// packages/alpinejs/src/utils/debounce.js
function debounce(func, wait) {
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      func.apply(context, args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// packages/alpinejs/src/utils/throttle.js
function throttle(func, limit) {
  let inThrottle;
  return function() {
    let context = this, args = arguments;
    if (!inThrottle) {
      func.apply(context, args);
      inThrottle = true;
      setTimeout(() => inThrottle = false, limit);
    }
  };
}

// packages/alpinejs/src/plugin.js
function plugin(callback) {
  callback(alpine_default);
}

// packages/alpinejs/src/store.js
var stores = {};
var isReactive = false;
function store(name, value) {
  if (!isReactive) {
    stores = reactive(stores);
    isReactive = true;
  }
  if (value === void 0) {
    return stores[name];
  }
  stores[name] = value;
  if (typeof value === "object" && value !== null && value.hasOwnProperty("init") && typeof value.init === "function") {
    stores[name].init();
  }
  initInterceptors(stores[name]);
}
function getStores() {
  return stores;
}

// packages/alpinejs/src/binds.js
var binds = {};
function bind2(name, bindings) {
  let getBindings = typeof bindings !== "function" ? () => bindings : bindings;
  if (name instanceof Element) {
    applyBindingsObject(name, getBindings());
  } else {
    binds[name] = getBindings;
  }
}
function injectBindingProviders(obj) {
  Object.entries(binds).forEach(([name, callback]) => {
    Object.defineProperty(obj, name, {
      get() {
        return (...args) => {
          return callback(...args);
        };
      }
    });
  });
  return obj;
}
function applyBindingsObject(el, obj, original) {
  let cleanupRunners = [];
  while (cleanupRunners.length)
    cleanupRunners.pop()();
  let attributes = Object.entries(obj).map(([name, value]) => ({name, value}));
  let staticAttributes = attributesOnly(attributes);
  attributes = attributes.map((attribute) => {
    if (staticAttributes.find((attr) => attr.name === attribute.name)) {
      return {
        name: `x-bind:${attribute.name}`,
        value: `"${attribute.value}"`
      };
    }
    return attribute;
  });
  directives(el, attributes, original).map((handle) => {
    cleanupRunners.push(handle.runCleanups);
    handle();
  });
}

// packages/alpinejs/src/datas.js
var datas = {};
function data(name, callback) {
  datas[name] = callback;
}
function injectDataProviders(obj, context) {
  Object.entries(datas).forEach(([name, callback]) => {
    Object.defineProperty(obj, name, {
      get() {
        return (...args) => {
          return callback.bind(context)(...args);
        };
      },
      enumerable: false
    });
  });
  return obj;
}

// packages/alpinejs/src/alpine.js
var Alpine = {
  get reactive() {
    return reactive;
  },
  get release() {
    return release;
  },
  get effect() {
    return effect;
  },
  get raw() {
    return raw;
  },
  version: "3.11.1",
  flushAndStopDeferringMutations,
  dontAutoEvaluateFunctions,
  disableEffectScheduling,
  startObservingMutations,
  stopObservingMutations,
  setReactivityEngine,
  closestDataStack,
  skipDuringClone,
  onlyDuringClone,
  addRootSelector,
  addInitSelector,
  addScopeToNode,
  deferMutations,
  mapAttributes,
  evaluateLater,
  interceptInit,
  setEvaluator,
  mergeProxies,
  findClosest,
  closestRoot,
  destroyTree,
  interceptor,
  transition,
  setStyles,
  mutateDom,
  directive,
  throttle,
  debounce,
  evaluate,
  initTree,
  nextTick,
  prefixed: prefix,
  prefix: setPrefix,
  plugin,
  magic,
  store,
  start,
  clone,
  bound: getBinding,
  $data: scope,
  walk,
  data,
  bind: bind2
};
var alpine_default = Alpine;

// node_modules/@vue/shared/dist/shared.esm-bundler.js
function makeMap(str, expectsLowerCase) {
  const map = Object.create(null);
  const list = str.split(",");
  for (let i = 0; i < list.length; i++) {
    map[list[i]] = true;
  }
  return expectsLowerCase ? (val) => !!map[val.toLowerCase()] : (val) => !!map[val];
}
var PatchFlagNames = {
  [1]: `TEXT`,
  [2]: `CLASS`,
  [4]: `STYLE`,
  [8]: `PROPS`,
  [16]: `FULL_PROPS`,
  [32]: `HYDRATE_EVENTS`,
  [64]: `STABLE_FRAGMENT`,
  [128]: `KEYED_FRAGMENT`,
  [256]: `UNKEYED_FRAGMENT`,
  [512]: `NEED_PATCH`,
  [1024]: `DYNAMIC_SLOTS`,
  [2048]: `DEV_ROOT_FRAGMENT`,
  [-1]: `HOISTED`,
  [-2]: `BAIL`
};
var slotFlagsText = {
  [1]: "STABLE",
  [2]: "DYNAMIC",
  [3]: "FORWARDED"
};
var specialBooleanAttrs = `itemscope,allowfullscreen,formnovalidate,ismap,nomodule,novalidate,readonly`;
var isBooleanAttr2 = /* @__PURE__ */ makeMap(specialBooleanAttrs + `,async,autofocus,autoplay,controls,default,defer,disabled,hidden,loop,open,required,reversed,scoped,seamless,checked,muted,multiple,selected`);
var EMPTY_OBJ =  true ? Object.freeze({}) : 0;
var EMPTY_ARR =  true ? Object.freeze([]) : 0;
var extend = Object.assign;
var hasOwnProperty = Object.prototype.hasOwnProperty;
var hasOwn = (val, key) => hasOwnProperty.call(val, key);
var isArray = Array.isArray;
var isMap = (val) => toTypeString(val) === "[object Map]";
var isString = (val) => typeof val === "string";
var isSymbol = (val) => typeof val === "symbol";
var isObject = (val) => val !== null && typeof val === "object";
var objectToString = Object.prototype.toString;
var toTypeString = (value) => objectToString.call(value);
var toRawType = (value) => {
  return toTypeString(value).slice(8, -1);
};
var isIntegerKey = (key) => isString(key) && key !== "NaN" && key[0] !== "-" && "" + parseInt(key, 10) === key;
var cacheStringFunction = (fn) => {
  const cache = Object.create(null);
  return (str) => {
    const hit = cache[str];
    return hit || (cache[str] = fn(str));
  };
};
var camelizeRE = /-(\w)/g;
var camelize = cacheStringFunction((str) => {
  return str.replace(camelizeRE, (_, c) => c ? c.toUpperCase() : "");
});
var hyphenateRE = /\B([A-Z])/g;
var hyphenate = cacheStringFunction((str) => str.replace(hyphenateRE, "-$1").toLowerCase());
var capitalize = cacheStringFunction((str) => str.charAt(0).toUpperCase() + str.slice(1));
var toHandlerKey = cacheStringFunction((str) => str ? `on${capitalize(str)}` : ``);
var hasChanged = (value, oldValue) => value !== oldValue && (value === value || oldValue === oldValue);

// node_modules/@vue/reactivity/dist/reactivity.esm-bundler.js
var targetMap = new WeakMap();
var effectStack = [];
var activeEffect;
var ITERATE_KEY = Symbol( true ? "iterate" : 0);
var MAP_KEY_ITERATE_KEY = Symbol( true ? "Map key iterate" : 0);
function isEffect(fn) {
  return fn && fn._isEffect === true;
}
function effect2(fn, options = EMPTY_OBJ) {
  if (isEffect(fn)) {
    fn = fn.raw;
  }
  const effect3 = createReactiveEffect(fn, options);
  if (!options.lazy) {
    effect3();
  }
  return effect3;
}
function stop(effect3) {
  if (effect3.active) {
    cleanup(effect3);
    if (effect3.options.onStop) {
      effect3.options.onStop();
    }
    effect3.active = false;
  }
}
var uid = 0;
function createReactiveEffect(fn, options) {
  const effect3 = function reactiveEffect() {
    if (!effect3.active) {
      return fn();
    }
    if (!effectStack.includes(effect3)) {
      cleanup(effect3);
      try {
        enableTracking();
        effectStack.push(effect3);
        activeEffect = effect3;
        return fn();
      } finally {
        effectStack.pop();
        resetTracking();
        activeEffect = effectStack[effectStack.length - 1];
      }
    }
  };
  effect3.id = uid++;
  effect3.allowRecurse = !!options.allowRecurse;
  effect3._isEffect = true;
  effect3.active = true;
  effect3.raw = fn;
  effect3.deps = [];
  effect3.options = options;
  return effect3;
}
function cleanup(effect3) {
  const {deps} = effect3;
  if (deps.length) {
    for (let i = 0; i < deps.length; i++) {
      deps[i].delete(effect3);
    }
    deps.length = 0;
  }
}
var shouldTrack = true;
var trackStack = [];
function pauseTracking() {
  trackStack.push(shouldTrack);
  shouldTrack = false;
}
function enableTracking() {
  trackStack.push(shouldTrack);
  shouldTrack = true;
}
function resetTracking() {
  const last = trackStack.pop();
  shouldTrack = last === void 0 ? true : last;
}
function track(target, type, key) {
  if (!shouldTrack || activeEffect === void 0) {
    return;
  }
  let depsMap = targetMap.get(target);
  if (!depsMap) {
    targetMap.set(target, depsMap = new Map());
  }
  let dep = depsMap.get(key);
  if (!dep) {
    depsMap.set(key, dep = new Set());
  }
  if (!dep.has(activeEffect)) {
    dep.add(activeEffect);
    activeEffect.deps.push(dep);
    if (activeEffect.options.onTrack) {
      activeEffect.options.onTrack({
        effect: activeEffect,
        target,
        type,
        key
      });
    }
  }
}
function trigger(target, type, key, newValue, oldValue, oldTarget) {
  const depsMap = targetMap.get(target);
  if (!depsMap) {
    return;
  }
  const effects = new Set();
  const add2 = (effectsToAdd) => {
    if (effectsToAdd) {
      effectsToAdd.forEach((effect3) => {
        if (effect3 !== activeEffect || effect3.allowRecurse) {
          effects.add(effect3);
        }
      });
    }
  };
  if (type === "clear") {
    depsMap.forEach(add2);
  } else if (key === "length" && isArray(target)) {
    depsMap.forEach((dep, key2) => {
      if (key2 === "length" || key2 >= newValue) {
        add2(dep);
      }
    });
  } else {
    if (key !== void 0) {
      add2(depsMap.get(key));
    }
    switch (type) {
      case "add":
        if (!isArray(target)) {
          add2(depsMap.get(ITERATE_KEY));
          if (isMap(target)) {
            add2(depsMap.get(MAP_KEY_ITERATE_KEY));
          }
        } else if (isIntegerKey(key)) {
          add2(depsMap.get("length"));
        }
        break;
      case "delete":
        if (!isArray(target)) {
          add2(depsMap.get(ITERATE_KEY));
          if (isMap(target)) {
            add2(depsMap.get(MAP_KEY_ITERATE_KEY));
          }
        }
        break;
      case "set":
        if (isMap(target)) {
          add2(depsMap.get(ITERATE_KEY));
        }
        break;
    }
  }
  const run = (effect3) => {
    if (effect3.options.onTrigger) {
      effect3.options.onTrigger({
        effect: effect3,
        target,
        key,
        type,
        newValue,
        oldValue,
        oldTarget
      });
    }
    if (effect3.options.scheduler) {
      effect3.options.scheduler(effect3);
    } else {
      effect3();
    }
  };
  effects.forEach(run);
}
var isNonTrackableKeys = /* @__PURE__ */ makeMap(`__proto__,__v_isRef,__isVue`);
var builtInSymbols = new Set(Object.getOwnPropertyNames(Symbol).map((key) => Symbol[key]).filter(isSymbol));
var get2 = /* @__PURE__ */ createGetter();
var shallowGet = /* @__PURE__ */ createGetter(false, true);
var readonlyGet = /* @__PURE__ */ createGetter(true);
var shallowReadonlyGet = /* @__PURE__ */ createGetter(true, true);
var arrayInstrumentations = {};
["includes", "indexOf", "lastIndexOf"].forEach((key) => {
  const method = Array.prototype[key];
  arrayInstrumentations[key] = function(...args) {
    const arr = toRaw(this);
    for (let i = 0, l = this.length; i < l; i++) {
      track(arr, "get", i + "");
    }
    const res = method.apply(arr, args);
    if (res === -1 || res === false) {
      return method.apply(arr, args.map(toRaw));
    } else {
      return res;
    }
  };
});
["push", "pop", "shift", "unshift", "splice"].forEach((key) => {
  const method = Array.prototype[key];
  arrayInstrumentations[key] = function(...args) {
    pauseTracking();
    const res = method.apply(this, args);
    resetTracking();
    return res;
  };
});
function createGetter(isReadonly = false, shallow = false) {
  return function get3(target, key, receiver) {
    if (key === "__v_isReactive") {
      return !isReadonly;
    } else if (key === "__v_isReadonly") {
      return isReadonly;
    } else if (key === "__v_raw" && receiver === (isReadonly ? shallow ? shallowReadonlyMap : readonlyMap : shallow ? shallowReactiveMap : reactiveMap).get(target)) {
      return target;
    }
    const targetIsArray = isArray(target);
    if (!isReadonly && targetIsArray && hasOwn(arrayInstrumentations, key)) {
      return Reflect.get(arrayInstrumentations, key, receiver);
    }
    const res = Reflect.get(target, key, receiver);
    if (isSymbol(key) ? builtInSymbols.has(key) : isNonTrackableKeys(key)) {
      return res;
    }
    if (!isReadonly) {
      track(target, "get", key);
    }
    if (shallow) {
      return res;
    }
    if (isRef(res)) {
      const shouldUnwrap = !targetIsArray || !isIntegerKey(key);
      return shouldUnwrap ? res.value : res;
    }
    if (isObject(res)) {
      return isReadonly ? readonly(res) : reactive2(res);
    }
    return res;
  };
}
var set2 = /* @__PURE__ */ createSetter();
var shallowSet = /* @__PURE__ */ createSetter(true);
function createSetter(shallow = false) {
  return function set3(target, key, value, receiver) {
    let oldValue = target[key];
    if (!shallow) {
      value = toRaw(value);
      oldValue = toRaw(oldValue);
      if (!isArray(target) && isRef(oldValue) && !isRef(value)) {
        oldValue.value = value;
        return true;
      }
    }
    const hadKey = isArray(target) && isIntegerKey(key) ? Number(key) < target.length : hasOwn(target, key);
    const result = Reflect.set(target, key, value, receiver);
    if (target === toRaw(receiver)) {
      if (!hadKey) {
        trigger(target, "add", key, value);
      } else if (hasChanged(value, oldValue)) {
        trigger(target, "set", key, value, oldValue);
      }
    }
    return result;
  };
}
function deleteProperty(target, key) {
  const hadKey = hasOwn(target, key);
  const oldValue = target[key];
  const result = Reflect.deleteProperty(target, key);
  if (result && hadKey) {
    trigger(target, "delete", key, void 0, oldValue);
  }
  return result;
}
function has(target, key) {
  const result = Reflect.has(target, key);
  if (!isSymbol(key) || !builtInSymbols.has(key)) {
    track(target, "has", key);
  }
  return result;
}
function ownKeys(target) {
  track(target, "iterate", isArray(target) ? "length" : ITERATE_KEY);
  return Reflect.ownKeys(target);
}
var mutableHandlers = {
  get: get2,
  set: set2,
  deleteProperty,
  has,
  ownKeys
};
var readonlyHandlers = {
  get: readonlyGet,
  set(target, key) {
    if (true) {
      console.warn(`Set operation on key "${String(key)}" failed: target is readonly.`, target);
    }
    return true;
  },
  deleteProperty(target, key) {
    if (true) {
      console.warn(`Delete operation on key "${String(key)}" failed: target is readonly.`, target);
    }
    return true;
  }
};
var shallowReactiveHandlers = extend({}, mutableHandlers, {
  get: shallowGet,
  set: shallowSet
});
var shallowReadonlyHandlers = extend({}, readonlyHandlers, {
  get: shallowReadonlyGet
});
var toReactive = (value) => isObject(value) ? reactive2(value) : value;
var toReadonly = (value) => isObject(value) ? readonly(value) : value;
var toShallow = (value) => value;
var getProto = (v) => Reflect.getPrototypeOf(v);
function get$1(target, key, isReadonly = false, isShallow = false) {
  target = target["__v_raw"];
  const rawTarget = toRaw(target);
  const rawKey = toRaw(key);
  if (key !== rawKey) {
    !isReadonly && track(rawTarget, "get", key);
  }
  !isReadonly && track(rawTarget, "get", rawKey);
  const {has: has2} = getProto(rawTarget);
  const wrap = isShallow ? toShallow : isReadonly ? toReadonly : toReactive;
  if (has2.call(rawTarget, key)) {
    return wrap(target.get(key));
  } else if (has2.call(rawTarget, rawKey)) {
    return wrap(target.get(rawKey));
  } else if (target !== rawTarget) {
    target.get(key);
  }
}
function has$1(key, isReadonly = false) {
  const target = this["__v_raw"];
  const rawTarget = toRaw(target);
  const rawKey = toRaw(key);
  if (key !== rawKey) {
    !isReadonly && track(rawTarget, "has", key);
  }
  !isReadonly && track(rawTarget, "has", rawKey);
  return key === rawKey ? target.has(key) : target.has(key) || target.has(rawKey);
}
function size(target, isReadonly = false) {
  target = target["__v_raw"];
  !isReadonly && track(toRaw(target), "iterate", ITERATE_KEY);
  return Reflect.get(target, "size", target);
}
function add(value) {
  value = toRaw(value);
  const target = toRaw(this);
  const proto = getProto(target);
  const hadKey = proto.has.call(target, value);
  if (!hadKey) {
    target.add(value);
    trigger(target, "add", value, value);
  }
  return this;
}
function set$1(key, value) {
  value = toRaw(value);
  const target = toRaw(this);
  const {has: has2, get: get3} = getProto(target);
  let hadKey = has2.call(target, key);
  if (!hadKey) {
    key = toRaw(key);
    hadKey = has2.call(target, key);
  } else if (true) {
    checkIdentityKeys(target, has2, key);
  }
  const oldValue = get3.call(target, key);
  target.set(key, value);
  if (!hadKey) {
    trigger(target, "add", key, value);
  } else if (hasChanged(value, oldValue)) {
    trigger(target, "set", key, value, oldValue);
  }
  return this;
}
function deleteEntry(key) {
  const target = toRaw(this);
  const {has: has2, get: get3} = getProto(target);
  let hadKey = has2.call(target, key);
  if (!hadKey) {
    key = toRaw(key);
    hadKey = has2.call(target, key);
  } else if (true) {
    checkIdentityKeys(target, has2, key);
  }
  const oldValue = get3 ? get3.call(target, key) : void 0;
  const result = target.delete(key);
  if (hadKey) {
    trigger(target, "delete", key, void 0, oldValue);
  }
  return result;
}
function clear() {
  const target = toRaw(this);
  const hadItems = target.size !== 0;
  const oldTarget =  true ? isMap(target) ? new Map(target) : new Set(target) : 0;
  const result = target.clear();
  if (hadItems) {
    trigger(target, "clear", void 0, void 0, oldTarget);
  }
  return result;
}
function createForEach(isReadonly, isShallow) {
  return function forEach(callback, thisArg) {
    const observed = this;
    const target = observed["__v_raw"];
    const rawTarget = toRaw(target);
    const wrap = isShallow ? toShallow : isReadonly ? toReadonly : toReactive;
    !isReadonly && track(rawTarget, "iterate", ITERATE_KEY);
    return target.forEach((value, key) => {
      return callback.call(thisArg, wrap(value), wrap(key), observed);
    });
  };
}
function createIterableMethod(method, isReadonly, isShallow) {
  return function(...args) {
    const target = this["__v_raw"];
    const rawTarget = toRaw(target);
    const targetIsMap = isMap(rawTarget);
    const isPair = method === "entries" || method === Symbol.iterator && targetIsMap;
    const isKeyOnly = method === "keys" && targetIsMap;
    const innerIterator = target[method](...args);
    const wrap = isShallow ? toShallow : isReadonly ? toReadonly : toReactive;
    !isReadonly && track(rawTarget, "iterate", isKeyOnly ? MAP_KEY_ITERATE_KEY : ITERATE_KEY);
    return {
      next() {
        const {value, done} = innerIterator.next();
        return done ? {value, done} : {
          value: isPair ? [wrap(value[0]), wrap(value[1])] : wrap(value),
          done
        };
      },
      [Symbol.iterator]() {
        return this;
      }
    };
  };
}
function createReadonlyMethod(type) {
  return function(...args) {
    if (true) {
      const key = args[0] ? `on key "${args[0]}" ` : ``;
      console.warn(`${capitalize(type)} operation ${key}failed: target is readonly.`, toRaw(this));
    }
    return type === "delete" ? false : this;
  };
}
var mutableInstrumentations = {
  get(key) {
    return get$1(this, key);
  },
  get size() {
    return size(this);
  },
  has: has$1,
  add,
  set: set$1,
  delete: deleteEntry,
  clear,
  forEach: createForEach(false, false)
};
var shallowInstrumentations = {
  get(key) {
    return get$1(this, key, false, true);
  },
  get size() {
    return size(this);
  },
  has: has$1,
  add,
  set: set$1,
  delete: deleteEntry,
  clear,
  forEach: createForEach(false, true)
};
var readonlyInstrumentations = {
  get(key) {
    return get$1(this, key, true);
  },
  get size() {
    return size(this, true);
  },
  has(key) {
    return has$1.call(this, key, true);
  },
  add: createReadonlyMethod("add"),
  set: createReadonlyMethod("set"),
  delete: createReadonlyMethod("delete"),
  clear: createReadonlyMethod("clear"),
  forEach: createForEach(true, false)
};
var shallowReadonlyInstrumentations = {
  get(key) {
    return get$1(this, key, true, true);
  },
  get size() {
    return size(this, true);
  },
  has(key) {
    return has$1.call(this, key, true);
  },
  add: createReadonlyMethod("add"),
  set: createReadonlyMethod("set"),
  delete: createReadonlyMethod("delete"),
  clear: createReadonlyMethod("clear"),
  forEach: createForEach(true, true)
};
var iteratorMethods = ["keys", "values", "entries", Symbol.iterator];
iteratorMethods.forEach((method) => {
  mutableInstrumentations[method] = createIterableMethod(method, false, false);
  readonlyInstrumentations[method] = createIterableMethod(method, true, false);
  shallowInstrumentations[method] = createIterableMethod(method, false, true);
  shallowReadonlyInstrumentations[method] = createIterableMethod(method, true, true);
});
function createInstrumentationGetter(isReadonly, shallow) {
  const instrumentations = shallow ? isReadonly ? shallowReadonlyInstrumentations : shallowInstrumentations : isReadonly ? readonlyInstrumentations : mutableInstrumentations;
  return (target, key, receiver) => {
    if (key === "__v_isReactive") {
      return !isReadonly;
    } else if (key === "__v_isReadonly") {
      return isReadonly;
    } else if (key === "__v_raw") {
      return target;
    }
    return Reflect.get(hasOwn(instrumentations, key) && key in target ? instrumentations : target, key, receiver);
  };
}
var mutableCollectionHandlers = {
  get: createInstrumentationGetter(false, false)
};
var shallowCollectionHandlers = {
  get: createInstrumentationGetter(false, true)
};
var readonlyCollectionHandlers = {
  get: createInstrumentationGetter(true, false)
};
var shallowReadonlyCollectionHandlers = {
  get: createInstrumentationGetter(true, true)
};
function checkIdentityKeys(target, has2, key) {
  const rawKey = toRaw(key);
  if (rawKey !== key && has2.call(target, rawKey)) {
    const type = toRawType(target);
    console.warn(`Reactive ${type} contains both the raw and reactive versions of the same object${type === `Map` ? ` as keys` : ``}, which can lead to inconsistencies. Avoid differentiating between the raw and reactive versions of an object and only use the reactive version if possible.`);
  }
}
var reactiveMap = new WeakMap();
var shallowReactiveMap = new WeakMap();
var readonlyMap = new WeakMap();
var shallowReadonlyMap = new WeakMap();
function targetTypeMap(rawType) {
  switch (rawType) {
    case "Object":
    case "Array":
      return 1;
    case "Map":
    case "Set":
    case "WeakMap":
    case "WeakSet":
      return 2;
    default:
      return 0;
  }
}
function getTargetType(value) {
  return value["__v_skip"] || !Object.isExtensible(value) ? 0 : targetTypeMap(toRawType(value));
}
function reactive2(target) {
  if (target && target["__v_isReadonly"]) {
    return target;
  }
  return createReactiveObject(target, false, mutableHandlers, mutableCollectionHandlers, reactiveMap);
}
function readonly(target) {
  return createReactiveObject(target, true, readonlyHandlers, readonlyCollectionHandlers, readonlyMap);
}
function createReactiveObject(target, isReadonly, baseHandlers, collectionHandlers, proxyMap) {
  if (!isObject(target)) {
    if (true) {
      console.warn(`value cannot be made reactive: ${String(target)}`);
    }
    return target;
  }
  if (target["__v_raw"] && !(isReadonly && target["__v_isReactive"])) {
    return target;
  }
  const existingProxy = proxyMap.get(target);
  if (existingProxy) {
    return existingProxy;
  }
  const targetType = getTargetType(target);
  if (targetType === 0) {
    return target;
  }
  const proxy = new Proxy(target, targetType === 2 ? collectionHandlers : baseHandlers);
  proxyMap.set(target, proxy);
  return proxy;
}
function toRaw(observed) {
  return observed && toRaw(observed["__v_raw"]) || observed;
}
function isRef(r) {
  return Boolean(r && r.__v_isRef === true);
}

// packages/alpinejs/src/magics/$nextTick.js
magic("nextTick", () => nextTick);

// packages/alpinejs/src/magics/$dispatch.js
magic("dispatch", (el) => dispatch.bind(dispatch, el));

// packages/alpinejs/src/magics/$watch.js
magic("watch", (el, {evaluateLater: evaluateLater2, effect: effect3}) => (key, callback) => {
  let evaluate2 = evaluateLater2(key);
  let firstTime = true;
  let oldValue;
  let effectReference = effect3(() => evaluate2((value) => {
    JSON.stringify(value);
    if (!firstTime) {
      queueMicrotask(() => {
        callback(value, oldValue);
        oldValue = value;
      });
    } else {
      oldValue = value;
    }
    firstTime = false;
  }));
  el._x_effects.delete(effectReference);
});

// packages/alpinejs/src/magics/$store.js
magic("store", getStores);

// packages/alpinejs/src/magics/$data.js
magic("data", (el) => scope(el));

// packages/alpinejs/src/magics/$root.js
magic("root", (el) => closestRoot(el));

// packages/alpinejs/src/magics/$refs.js
magic("refs", (el) => {
  if (el._x_refs_proxy)
    return el._x_refs_proxy;
  el._x_refs_proxy = mergeProxies(getArrayOfRefObject(el));
  return el._x_refs_proxy;
});
function getArrayOfRefObject(el) {
  let refObjects = [];
  let currentEl = el;
  while (currentEl) {
    if (currentEl._x_refs)
      refObjects.push(currentEl._x_refs);
    currentEl = currentEl.parentNode;
  }
  return refObjects;
}

// packages/alpinejs/src/ids.js
var globalIdMemo = {};
function findAndIncrementId(name) {
  if (!globalIdMemo[name])
    globalIdMemo[name] = 0;
  return ++globalIdMemo[name];
}
function closestIdRoot(el, name) {
  return findClosest(el, (element) => {
    if (element._x_ids && element._x_ids[name])
      return true;
  });
}
function setIdRoot(el, name) {
  if (!el._x_ids)
    el._x_ids = {};
  if (!el._x_ids[name])
    el._x_ids[name] = findAndIncrementId(name);
}

// packages/alpinejs/src/magics/$id.js
magic("id", (el) => (name, key = null) => {
  let root = closestIdRoot(el, name);
  let id = root ? root._x_ids[name] : findAndIncrementId(name);
  return key ? `${name}-${id}-${key}` : `${name}-${id}`;
});

// packages/alpinejs/src/magics/$el.js
magic("el", (el) => el);

// packages/alpinejs/src/magics/index.js
warnMissingPluginMagic("Focus", "focus", "focus");
warnMissingPluginMagic("Persist", "persist", "persist");
function warnMissingPluginMagic(name, magicName, slug) {
  magic(magicName, (el) => warn(`You can't use [$${directiveName}] without first installing the "${name}" plugin here: https://alpinejs.dev/plugins/${slug}`, el));
}

// packages/alpinejs/src/entangle.js
function entangle({get: outerGet, set: outerSet}, {get: innerGet, set: innerSet}) {
  let firstRun = true;
  let outerHash, innerHash, outerHashLatest, innerHashLatest;
  let reference = effect(() => {
    let outer, inner;
    if (firstRun) {
      outer = outerGet();
      innerSet(outer);
      inner = innerGet();
      firstRun = false;
    } else {
      outer = outerGet();
      inner = innerGet();
      outerHashLatest = JSON.stringify(outer);
      innerHashLatest = JSON.stringify(inner);
      if (outerHashLatest !== outerHash) {
        inner = innerGet();
        innerSet(outer);
        inner = outer;
      } else {
        outerSet(inner);
        outer = inner;
      }
    }
    outerHash = JSON.stringify(outer);
    innerHash = JSON.stringify(inner);
  });
  return () => {
    release(reference);
  };
}

// packages/alpinejs/src/directives/x-modelable.js
directive("modelable", (el, {expression}, {effect: effect3, evaluateLater: evaluateLater2, cleanup: cleanup2}) => {
  let func = evaluateLater2(expression);
  let innerGet = () => {
    let result;
    func((i) => result = i);
    return result;
  };
  let evaluateInnerSet = evaluateLater2(`${expression} = __placeholder`);
  let innerSet = (val) => evaluateInnerSet(() => {
  }, {scope: {__placeholder: val}});
  let initialValue = innerGet();
  innerSet(initialValue);
  queueMicrotask(() => {
    if (!el._x_model)
      return;
    el._x_removeModelListeners["default"]();
    let outerGet = el._x_model.get;
    let outerSet = el._x_model.set;
    let releaseEntanglement = entangle({
      get() {
        return outerGet();
      },
      set(value) {
        outerSet(value);
      }
    }, {
      get() {
        return innerGet();
      },
      set(value) {
        innerSet(value);
      }
    });
    cleanup2(releaseEntanglement);
  });
});

// packages/alpinejs/src/directives/x-teleport.js
var teleportContainerDuringClone = document.createElement("div");
directive("teleport", (el, {modifiers, expression}, {cleanup: cleanup2}) => {
  if (el.tagName.toLowerCase() !== "template")
    warn("x-teleport can only be used on a <template> tag", el);
  let target = skipDuringClone(() => {
    return document.querySelector(expression);
  }, () => {
    return teleportContainerDuringClone;
  })();
  if (!target)
    warn(`Cannot find x-teleport element for selector: "${expression}"`);
  let clone2 = el.content.cloneNode(true).firstElementChild;
  el._x_teleport = clone2;
  clone2._x_teleportBack = el;
  if (el._x_forwardEvents) {
    el._x_forwardEvents.forEach((eventName) => {
      clone2.addEventListener(eventName, (e) => {
        e.stopPropagation();
        el.dispatchEvent(new e.constructor(e.type, e));
      });
    });
  }
  addScopeToNode(clone2, {}, el);
  mutateDom(() => {
    if (modifiers.includes("prepend")) {
      target.parentNode.insertBefore(clone2, target);
    } else if (modifiers.includes("append")) {
      target.parentNode.insertBefore(clone2, target.nextSibling);
    } else {
      target.appendChild(clone2);
    }
    initTree(clone2);
    clone2._x_ignore = true;
  });
  cleanup2(() => clone2.remove());
});

// packages/alpinejs/src/directives/x-ignore.js
var handler = () => {
};
handler.inline = (el, {modifiers}, {cleanup: cleanup2}) => {
  modifiers.includes("self") ? el._x_ignoreSelf = true : el._x_ignore = true;
  cleanup2(() => {
    modifiers.includes("self") ? delete el._x_ignoreSelf : delete el._x_ignore;
  });
};
directive("ignore", handler);

// packages/alpinejs/src/directives/x-effect.js
directive("effect", (el, {expression}, {effect: effect3}) => effect3(evaluateLater(el, expression)));

// packages/alpinejs/src/utils/on.js
function on(el, event, modifiers, callback) {
  let listenerTarget = el;
  let handler3 = (e) => callback(e);
  let options = {};
  let wrapHandler = (callback2, wrapper) => (e) => wrapper(callback2, e);
  if (modifiers.includes("dot"))
    event = dotSyntax(event);
  if (modifiers.includes("camel"))
    event = camelCase2(event);
  if (modifiers.includes("passive"))
    options.passive = true;
  if (modifiers.includes("capture"))
    options.capture = true;
  if (modifiers.includes("window"))
    listenerTarget = window;
  if (modifiers.includes("document"))
    listenerTarget = document;
  if (modifiers.includes("prevent"))
    handler3 = wrapHandler(handler3, (next, e) => {
      e.preventDefault();
      next(e);
    });
  if (modifiers.includes("stop"))
    handler3 = wrapHandler(handler3, (next, e) => {
      e.stopPropagation();
      next(e);
    });
  if (modifiers.includes("self"))
    handler3 = wrapHandler(handler3, (next, e) => {
      e.target === el && next(e);
    });
  if (modifiers.includes("away") || modifiers.includes("outside")) {
    listenerTarget = document;
    handler3 = wrapHandler(handler3, (next, e) => {
      if (el.contains(e.target))
        return;
      if (e.target.isConnected === false)
        return;
      if (el.offsetWidth < 1 && el.offsetHeight < 1)
        return;
      if (el._x_isShown === false)
        return;
      next(e);
    });
  }
  if (modifiers.includes("once")) {
    handler3 = wrapHandler(handler3, (next, e) => {
      next(e);
      listenerTarget.removeEventListener(event, handler3, options);
    });
  }
  handler3 = wrapHandler(handler3, (next, e) => {
    if (isKeyEvent(event)) {
      if (isListeningForASpecificKeyThatHasntBeenPressed(e, modifiers)) {
        return;
      }
    }
    next(e);
  });
  if (modifiers.includes("debounce")) {
    let nextModifier = modifiers[modifiers.indexOf("debounce") + 1] || "invalid-wait";
    let wait = isNumeric(nextModifier.split("ms")[0]) ? Number(nextModifier.split("ms")[0]) : 250;
    handler3 = debounce(handler3, wait);
  }
  if (modifiers.includes("throttle")) {
    let nextModifier = modifiers[modifiers.indexOf("throttle") + 1] || "invalid-wait";
    let wait = isNumeric(nextModifier.split("ms")[0]) ? Number(nextModifier.split("ms")[0]) : 250;
    handler3 = throttle(handler3, wait);
  }
  listenerTarget.addEventListener(event, handler3, options);
  return () => {
    listenerTarget.removeEventListener(event, handler3, options);
  };
}
function dotSyntax(subject) {
  return subject.replace(/-/g, ".");
}
function camelCase2(subject) {
  return subject.toLowerCase().replace(/-(\w)/g, (match, char) => char.toUpperCase());
}
function isNumeric(subject) {
  return !Array.isArray(subject) && !isNaN(subject);
}
function kebabCase2(subject) {
  if ([" ", "_"].includes(subject))
    return subject;
  return subject.replace(/([a-z])([A-Z])/g, "$1-$2").replace(/[_\s]/, "-").toLowerCase();
}
function isKeyEvent(event) {
  return ["keydown", "keyup"].includes(event);
}
function isListeningForASpecificKeyThatHasntBeenPressed(e, modifiers) {
  let keyModifiers = modifiers.filter((i) => {
    return !["window", "document", "prevent", "stop", "once"].includes(i);
  });
  if (keyModifiers.includes("debounce")) {
    let debounceIndex = keyModifiers.indexOf("debounce");
    keyModifiers.splice(debounceIndex, isNumeric((keyModifiers[debounceIndex + 1] || "invalid-wait").split("ms")[0]) ? 2 : 1);
  }
  if (keyModifiers.includes("throttle")) {
    let debounceIndex = keyModifiers.indexOf("throttle");
    keyModifiers.splice(debounceIndex, isNumeric((keyModifiers[debounceIndex + 1] || "invalid-wait").split("ms")[0]) ? 2 : 1);
  }
  if (keyModifiers.length === 0)
    return false;
  if (keyModifiers.length === 1 && keyToModifiers(e.key).includes(keyModifiers[0]))
    return false;
  const systemKeyModifiers = ["ctrl", "shift", "alt", "meta", "cmd", "super"];
  const selectedSystemKeyModifiers = systemKeyModifiers.filter((modifier) => keyModifiers.includes(modifier));
  keyModifiers = keyModifiers.filter((i) => !selectedSystemKeyModifiers.includes(i));
  if (selectedSystemKeyModifiers.length > 0) {
    const activelyPressedKeyModifiers = selectedSystemKeyModifiers.filter((modifier) => {
      if (modifier === "cmd" || modifier === "super")
        modifier = "meta";
      return e[`${modifier}Key`];
    });
    if (activelyPressedKeyModifiers.length === selectedSystemKeyModifiers.length) {
      if (keyToModifiers(e.key).includes(keyModifiers[0]))
        return false;
    }
  }
  return true;
}
function keyToModifiers(key) {
  if (!key)
    return [];
  key = kebabCase2(key);
  let modifierToKeyMap = {
    ctrl: "control",
    slash: "/",
    space: " ",
    spacebar: " ",
    cmd: "meta",
    esc: "escape",
    up: "arrow-up",
    down: "arrow-down",
    left: "arrow-left",
    right: "arrow-right",
    period: ".",
    equal: "=",
    minus: "-",
    underscore: "_"
  };
  modifierToKeyMap[key] = key;
  return Object.keys(modifierToKeyMap).map((modifier) => {
    if (modifierToKeyMap[modifier] === key)
      return modifier;
  }).filter((modifier) => modifier);
}

// packages/alpinejs/src/directives/x-model.js
directive("model", (el, {modifiers, expression}, {effect: effect3, cleanup: cleanup2}) => {
  let scopeTarget = el;
  if (modifiers.includes("parent")) {
    scopeTarget = el.parentNode;
  }
  let evaluateGet = evaluateLater(scopeTarget, expression);
  let evaluateSet;
  if (typeof expression === "string") {
    evaluateSet = evaluateLater(scopeTarget, `${expression} = __placeholder`);
  } else if (typeof expression === "function" && typeof expression() === "string") {
    evaluateSet = evaluateLater(scopeTarget, `${expression()} = __placeholder`);
  } else {
    evaluateSet = () => {
    };
  }
  let getValue = () => {
    let result;
    evaluateGet((value) => result = value);
    return isGetterSetter(result) ? result.get() : result;
  };
  let setValue = (value) => {
    let result;
    evaluateGet((value2) => result = value2);
    if (isGetterSetter(result)) {
      result.set(value);
    } else {
      evaluateSet(() => {
      }, {
        scope: {__placeholder: value}
      });
    }
  };
  if (typeof expression === "string" && el.type === "radio") {
    mutateDom(() => {
      if (!el.hasAttribute("name"))
        el.setAttribute("name", expression);
    });
  }
  var event = el.tagName.toLowerCase() === "select" || ["checkbox", "radio"].includes(el.type) || modifiers.includes("lazy") ? "change" : "input";
  let removeListener = on(el, event, modifiers, (e) => {
    setValue(getInputValue(el, modifiers, e, getValue()));
  });
  if (!el._x_removeModelListeners)
    el._x_removeModelListeners = {};
  el._x_removeModelListeners["default"] = removeListener;
  cleanup2(() => el._x_removeModelListeners["default"]());
  if (el.form) {
    let removeResetListener = on(el.form, "reset", [], (e) => {
      nextTick(() => el._x_model && el._x_model.set(el.value));
    });
    cleanup2(() => removeResetListener());
  }
  el._x_model = {
    get() {
      return getValue();
    },
    set(value) {
      setValue(value);
    }
  };
  el._x_forceModelUpdate = (value) => {
    value = value === void 0 ? getValue() : value;
    if (value === void 0 && typeof expression === "string" && expression.match(/\./))
      value = "";
    window.fromModel = true;
    mutateDom(() => bind(el, "value", value));
    delete window.fromModel;
  };
  effect3(() => {
    let value = getValue();
    if (modifiers.includes("unintrusive") && document.activeElement.isSameNode(el))
      return;
    el._x_forceModelUpdate(value);
  });
});
function getInputValue(el, modifiers, event, currentValue) {
  return mutateDom(() => {
    if (event instanceof CustomEvent && event.detail !== void 0) {
      return typeof event.detail != "undefined" ? event.detail : event.target.value;
    } else if (el.type === "checkbox") {
      if (Array.isArray(currentValue)) {
        let newValue = modifiers.includes("number") ? safeParseNumber(event.target.value) : event.target.value;
        return event.target.checked ? currentValue.concat([newValue]) : currentValue.filter((el2) => !checkedAttrLooseCompare2(el2, newValue));
      } else {
        return event.target.checked;
      }
    } else if (el.tagName.toLowerCase() === "select" && el.multiple) {
      return modifiers.includes("number") ? Array.from(event.target.selectedOptions).map((option) => {
        let rawValue = option.value || option.text;
        return safeParseNumber(rawValue);
      }) : Array.from(event.target.selectedOptions).map((option) => {
        return option.value || option.text;
      });
    } else {
      let rawValue = event.target.value;
      return modifiers.includes("number") ? safeParseNumber(rawValue) : modifiers.includes("trim") ? rawValue.trim() : rawValue;
    }
  });
}
function safeParseNumber(rawValue) {
  let number = rawValue ? parseFloat(rawValue) : null;
  return isNumeric2(number) ? number : rawValue;
}
function checkedAttrLooseCompare2(valueA, valueB) {
  return valueA == valueB;
}
function isNumeric2(subject) {
  return !Array.isArray(subject) && !isNaN(subject);
}
function isGetterSetter(value) {
  return value !== null && typeof value === "object" && typeof value.get === "function" && typeof value.set === "function";
}

// packages/alpinejs/src/directives/x-cloak.js
directive("cloak", (el) => queueMicrotask(() => mutateDom(() => el.removeAttribute(prefix("cloak")))));

// packages/alpinejs/src/directives/x-init.js
addInitSelector(() => `[${prefix("init")}]`);
directive("init", skipDuringClone((el, {expression}, {evaluate: evaluate2}) => {
  if (typeof expression === "string") {
    return !!expression.trim() && evaluate2(expression, {}, false);
  }
  return evaluate2(expression, {}, false);
}));

// packages/alpinejs/src/directives/x-text.js
directive("text", (el, {expression}, {effect: effect3, evaluateLater: evaluateLater2}) => {
  let evaluate2 = evaluateLater2(expression);
  effect3(() => {
    evaluate2((value) => {
      mutateDom(() => {
        el.textContent = value;
      });
    });
  });
});

// packages/alpinejs/src/directives/x-html.js
directive("html", (el, {expression}, {effect: effect3, evaluateLater: evaluateLater2}) => {
  let evaluate2 = evaluateLater2(expression);
  effect3(() => {
    evaluate2((value) => {
      mutateDom(() => {
        el.innerHTML = value;
        el._x_ignoreSelf = true;
        initTree(el);
        delete el._x_ignoreSelf;
      });
    });
  });
});

// packages/alpinejs/src/directives/x-bind.js
mapAttributes(startingWith(":", into(prefix("bind:"))));
directive("bind", (el, {value, modifiers, expression, original}, {effect: effect3}) => {
  if (!value) {
    let bindingProviders = {};
    injectBindingProviders(bindingProviders);
    let getBindings = evaluateLater(el, expression);
    getBindings((bindings) => {
      applyBindingsObject(el, bindings, original);
    }, {scope: bindingProviders});
    return;
  }
  if (value === "key")
    return storeKeyForXFor(el, expression);
  let evaluate2 = evaluateLater(el, expression);
  effect3(() => evaluate2((result) => {
    if (result === void 0 && typeof expression === "string" && expression.match(/\./)) {
      result = "";
    }
    mutateDom(() => bind(el, value, result, modifiers));
  }));
});
function storeKeyForXFor(el, expression) {
  el._x_keyExpression = expression;
}

// packages/alpinejs/src/directives/x-data.js
addRootSelector(() => `[${prefix("data")}]`);
directive("data", skipDuringClone((el, {expression}, {cleanup: cleanup2}) => {
  expression = expression === "" ? "{}" : expression;
  let magicContext = {};
  injectMagics(magicContext, el);
  let dataProviderContext = {};
  injectDataProviders(dataProviderContext, magicContext);
  let data2 = evaluate(el, expression, {scope: dataProviderContext});
  if (data2 === void 0)
    data2 = {};
  injectMagics(data2, el);
  let reactiveData = reactive(data2);
  initInterceptors(reactiveData);
  let undo = addScopeToNode(el, reactiveData);
  reactiveData["init"] && evaluate(el, reactiveData["init"]);
  cleanup2(() => {
    reactiveData["destroy"] && evaluate(el, reactiveData["destroy"]);
    undo();
  });
}));

// packages/alpinejs/src/directives/x-show.js
directive("show", (el, {modifiers, expression}, {effect: effect3}) => {
  let evaluate2 = evaluateLater(el, expression);
  if (!el._x_doHide)
    el._x_doHide = () => {
      mutateDom(() => {
        el.style.setProperty("display", "none", modifiers.includes("important") ? "important" : void 0);
      });
    };
  if (!el._x_doShow)
    el._x_doShow = () => {
      mutateDom(() => {
        if (el.style.length === 1 && el.style.display === "none") {
          el.removeAttribute("style");
        } else {
          el.style.removeProperty("display");
        }
      });
    };
  let hide = () => {
    el._x_doHide();
    el._x_isShown = false;
  };
  let show = () => {
    el._x_doShow();
    el._x_isShown = true;
  };
  let clickAwayCompatibleShow = () => setTimeout(show);
  let toggle = once((value) => value ? show() : hide(), (value) => {
    if (typeof el._x_toggleAndCascadeWithTransitions === "function") {
      el._x_toggleAndCascadeWithTransitions(el, value, show, hide);
    } else {
      value ? clickAwayCompatibleShow() : hide();
    }
  });
  let oldValue;
  let firstTime = true;
  effect3(() => evaluate2((value) => {
    if (!firstTime && value === oldValue)
      return;
    if (modifiers.includes("immediate"))
      value ? clickAwayCompatibleShow() : hide();
    toggle(value);
    oldValue = value;
    firstTime = false;
  }));
});

// packages/alpinejs/src/directives/x-for.js
directive("for", (el, {expression}, {effect: effect3, cleanup: cleanup2}) => {
  let iteratorNames = parseForExpression(expression);
  let evaluateItems = evaluateLater(el, iteratorNames.items);
  let evaluateKey = evaluateLater(el, el._x_keyExpression || "index");
  el._x_prevKeys = [];
  el._x_lookup = {};
  effect3(() => loop(el, iteratorNames, evaluateItems, evaluateKey));
  cleanup2(() => {
    Object.values(el._x_lookup).forEach((el2) => el2.remove());
    delete el._x_prevKeys;
    delete el._x_lookup;
  });
});
function loop(el, iteratorNames, evaluateItems, evaluateKey) {
  let isObject2 = (i) => typeof i === "object" && !Array.isArray(i);
  let templateEl = el;
  evaluateItems((items) => {
    if (isNumeric3(items) && items >= 0) {
      items = Array.from(Array(items).keys(), (i) => i + 1);
    }
    if (items === void 0)
      items = [];
    let lookup = el._x_lookup;
    let prevKeys = el._x_prevKeys;
    let scopes = [];
    let keys = [];
    if (isObject2(items)) {
      items = Object.entries(items).map(([key, value]) => {
        let scope2 = getIterationScopeVariables(iteratorNames, value, key, items);
        evaluateKey((value2) => keys.push(value2), {scope: {index: key, ...scope2}});
        scopes.push(scope2);
      });
    } else {
      for (let i = 0; i < items.length; i++) {
        let scope2 = getIterationScopeVariables(iteratorNames, items[i], i, items);
        evaluateKey((value) => keys.push(value), {scope: {index: i, ...scope2}});
        scopes.push(scope2);
      }
    }
    let adds = [];
    let moves = [];
    let removes = [];
    let sames = [];
    for (let i = 0; i < prevKeys.length; i++) {
      let key = prevKeys[i];
      if (keys.indexOf(key) === -1)
        removes.push(key);
    }
    prevKeys = prevKeys.filter((key) => !removes.includes(key));
    let lastKey = "template";
    for (let i = 0; i < keys.length; i++) {
      let key = keys[i];
      let prevIndex = prevKeys.indexOf(key);
      if (prevIndex === -1) {
        prevKeys.splice(i, 0, key);
        adds.push([lastKey, i]);
      } else if (prevIndex !== i) {
        let keyInSpot = prevKeys.splice(i, 1)[0];
        let keyForSpot = prevKeys.splice(prevIndex - 1, 1)[0];
        prevKeys.splice(i, 0, keyForSpot);
        prevKeys.splice(prevIndex, 0, keyInSpot);
        moves.push([keyInSpot, keyForSpot]);
      } else {
        sames.push(key);
      }
      lastKey = key;
    }
    for (let i = 0; i < removes.length; i++) {
      let key = removes[i];
      if (!!lookup[key]._x_effects) {
        lookup[key]._x_effects.forEach(dequeueJob);
      }
      lookup[key].remove();
      lookup[key] = null;
      delete lookup[key];
    }
    for (let i = 0; i < moves.length; i++) {
      let [keyInSpot, keyForSpot] = moves[i];
      let elInSpot = lookup[keyInSpot];
      let elForSpot = lookup[keyForSpot];
      let marker = document.createElement("div");
      mutateDom(() => {
        elForSpot.after(marker);
        elInSpot.after(elForSpot);
        elForSpot._x_currentIfEl && elForSpot.after(elForSpot._x_currentIfEl);
        marker.before(elInSpot);
        elInSpot._x_currentIfEl && elInSpot.after(elInSpot._x_currentIfEl);
        marker.remove();
      });
      refreshScope(elForSpot, scopes[keys.indexOf(keyForSpot)]);
    }
    for (let i = 0; i < adds.length; i++) {
      let [lastKey2, index] = adds[i];
      let lastEl = lastKey2 === "template" ? templateEl : lookup[lastKey2];
      if (lastEl._x_currentIfEl)
        lastEl = lastEl._x_currentIfEl;
      let scope2 = scopes[index];
      let key = keys[index];
      let clone2 = document.importNode(templateEl.content, true).firstElementChild;
      addScopeToNode(clone2, reactive(scope2), templateEl);
      mutateDom(() => {
        lastEl.after(clone2);
        initTree(clone2);
      });
      if (typeof key === "object") {
        warn("x-for key cannot be an object, it must be a string or an integer", templateEl);
      }
      lookup[key] = clone2;
    }
    for (let i = 0; i < sames.length; i++) {
      refreshScope(lookup[sames[i]], scopes[keys.indexOf(sames[i])]);
    }
    templateEl._x_prevKeys = keys;
  });
}
function parseForExpression(expression) {
  let forIteratorRE = /,([^,\}\]]*)(?:,([^,\}\]]*))?$/;
  let stripParensRE = /^\s*\(|\)\s*$/g;
  let forAliasRE = /([\s\S]*?)\s+(?:in|of)\s+([\s\S]*)/;
  let inMatch = expression.match(forAliasRE);
  if (!inMatch)
    return;
  let res = {};
  res.items = inMatch[2].trim();
  let item = inMatch[1].replace(stripParensRE, "").trim();
  let iteratorMatch = item.match(forIteratorRE);
  if (iteratorMatch) {
    res.item = item.replace(forIteratorRE, "").trim();
    res.index = iteratorMatch[1].trim();
    if (iteratorMatch[2]) {
      res.collection = iteratorMatch[2].trim();
    }
  } else {
    res.item = item;
  }
  return res;
}
function getIterationScopeVariables(iteratorNames, item, index, items) {
  let scopeVariables = {};
  if (/^\[.*\]$/.test(iteratorNames.item) && Array.isArray(item)) {
    let names = iteratorNames.item.replace("[", "").replace("]", "").split(",").map((i) => i.trim());
    names.forEach((name, i) => {
      scopeVariables[name] = item[i];
    });
  } else if (/^\{.*\}$/.test(iteratorNames.item) && !Array.isArray(item) && typeof item === "object") {
    let names = iteratorNames.item.replace("{", "").replace("}", "").split(",").map((i) => i.trim());
    names.forEach((name) => {
      scopeVariables[name] = item[name];
    });
  } else {
    scopeVariables[iteratorNames.item] = item;
  }
  if (iteratorNames.index)
    scopeVariables[iteratorNames.index] = index;
  if (iteratorNames.collection)
    scopeVariables[iteratorNames.collection] = items;
  return scopeVariables;
}
function isNumeric3(subject) {
  return !Array.isArray(subject) && !isNaN(subject);
}

// packages/alpinejs/src/directives/x-ref.js
function handler2() {
}
handler2.inline = (el, {expression}, {cleanup: cleanup2}) => {
  let root = closestRoot(el);
  if (!root._x_refs)
    root._x_refs = {};
  root._x_refs[expression] = el;
  cleanup2(() => delete root._x_refs[expression]);
};
directive("ref", handler2);

// packages/alpinejs/src/directives/x-if.js
directive("if", (el, {expression}, {effect: effect3, cleanup: cleanup2}) => {
  let evaluate2 = evaluateLater(el, expression);
  let show = () => {
    if (el._x_currentIfEl)
      return el._x_currentIfEl;
    let clone2 = el.content.cloneNode(true).firstElementChild;
    addScopeToNode(clone2, {}, el);
    mutateDom(() => {
      el.after(clone2);
      initTree(clone2);
    });
    el._x_currentIfEl = clone2;
    el._x_undoIf = () => {
      walk(clone2, (node) => {
        if (!!node._x_effects) {
          node._x_effects.forEach(dequeueJob);
        }
      });
      clone2.remove();
      delete el._x_currentIfEl;
    };
    return clone2;
  };
  let hide = () => {
    if (!el._x_undoIf)
      return;
    el._x_undoIf();
    delete el._x_undoIf;
  };
  effect3(() => evaluate2((value) => {
    value ? show() : hide();
  }));
  cleanup2(() => el._x_undoIf && el._x_undoIf());
});

// packages/alpinejs/src/directives/x-id.js
directive("id", (el, {expression}, {evaluate: evaluate2}) => {
  let names = evaluate2(expression);
  names.forEach((name) => setIdRoot(el, name));
});

// packages/alpinejs/src/directives/x-on.js
mapAttributes(startingWith("@", into(prefix("on:"))));
directive("on", skipDuringClone((el, {value, modifiers, expression}, {cleanup: cleanup2}) => {
  let evaluate2 = expression ? evaluateLater(el, expression) : () => {
  };
  if (el.tagName.toLowerCase() === "template") {
    if (!el._x_forwardEvents)
      el._x_forwardEvents = [];
    if (!el._x_forwardEvents.includes(value))
      el._x_forwardEvents.push(value);
  }
  let removeListener = on(el, value, modifiers, (e) => {
    evaluate2(() => {
    }, {scope: {$event: e}, params: [e]});
  });
  cleanup2(() => removeListener());
}));

// packages/alpinejs/src/directives/index.js
warnMissingPluginDirective("Collapse", "collapse", "collapse");
warnMissingPluginDirective("Intersect", "intersect", "intersect");
warnMissingPluginDirective("Focus", "trap", "focus");
warnMissingPluginDirective("Mask", "mask", "mask");
function warnMissingPluginDirective(name, directiveName2, slug) {
  directive(directiveName2, (el) => warn(`You can't use [x-${directiveName2}] without first installing the "${name}" plugin here: https://alpinejs.dev/plugins/${slug}`, el));
}

// packages/alpinejs/src/index.js
alpine_default.setEvaluator(normalEvaluator);
alpine_default.setReactivityEngine({reactive: reactive2, effect: effect2, release: stop, raw: toRaw});
var src_default = alpine_default;

// packages/alpinejs/builds/module.js
var module_default = src_default;



/***/ }),

/***/ "./resources/js/prodigy.js":
/*!*********************************!*\
  !*** ./resources/js/prodigy.js ***!
  \*********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var alpinejs__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! alpinejs */ "./node_modules/alpinejs/dist/module.esm.js");
// import './bootstrap';


if (!window.Alpine instanceof alpinejs__WEBPACK_IMPORTED_MODULE_0__["default"]) {
  window.Alpine = alpinejs__WEBPACK_IMPORTED_MODULE_0__["default"];
  alpinejs__WEBPACK_IMPORTED_MODULE_0__["default"].start();
}
__webpack_require__(/*! @shopify/draggable */ "./node_modules/@shopify/draggable/lib/draggable.bundle.js");

/***/ }),

/***/ "./resources/css/prodigy.css":
/*!***********************************!*\
  !*** ./resources/css/prodigy.css ***!
  \***********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/public/prodigy": 0,
/******/ 			"public/prodigy": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["public/prodigy"], () => (__webpack_require__("./resources/js/prodigy.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["public/prodigy"], () => (__webpack_require__("./resources/css/prodigy.css")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;