<div ng-controller="inputan">
<input type="text" ng-value="inputStatis"/>
<h1>{{inputStatis}}</h1>
<select ng-model="inputSelect">
  <option ng-repeat="key in dataSelectionKeys">{{dataSelection[key]}}</option>
</select>
</div>