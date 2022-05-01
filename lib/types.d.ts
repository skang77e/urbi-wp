import * as YAML from 'yaml';

type CodeMap = import('./CodeMap');
type SassValue = import('./SassValue');

export interface ParsedSource {
  readonly path: string;
  readonly source: string;
  readonly ast: YAML.ast.Document;
  readonly map: CodeMap;
}

export type UrbiScalar = string | number | boolean;
export interface UrbiObject {
  [key: string]: UrbiScalar | UrbiObject;
}
export type UrbiArray = Array<UrbiData>;

export type UrbiData = UrbiScalar | UrbiObject | UrbiArray;

export interface TransformedSource extends ParsedSource {
  readonly data: UrbiData;
}

export type ScalarTransformer = (
  node: YAML.ast.ScalarNode,
  doc: YAML.ast.Document,
  map: CodeMap,
) => string | number | boolean | SassValue;
