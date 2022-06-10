import {renderTabs} from './tabs.js';
import {renderPlusMinusButton} from './plus-minus-button.js';
import {renderForm} from './form.js';
import {renderTable} from './table.js';
import {renderNotifications} from './notifications.js';
import {renderCkeditor} from "./ckeditor.js";
import {renderDelete} from "./delete";
import {renderEdit} from "./edit";
import {renderClean} from './clean.js';
import {renderAccordion } from './accordion.js';
import {renderFilters} from './filters.js';
import {renderModalDelete} from './modalDelete.js';

renderFilters();
renderAccordion();
renderClean();
renderDelete();
renderEdit();
renderCkeditor();
renderNotifications();

renderTabs();
renderPlusMinusButton();
renderForm();
renderTable();
renderModalDelete();